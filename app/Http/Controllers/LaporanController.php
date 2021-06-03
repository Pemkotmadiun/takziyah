<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\log;
use App\Laporan;
use App\Pengajuan_santunan;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporan(Request $request)
    {
        $exist = true;
        $shuffled = '';
        while ($exist == true) {
            $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $shuffled = str_shuffle($str); 

            $check = Laporan::where('link', '=', $shuffled)->get();

            if ($check->count() == 0) { 
                $exist = false;
            }
        }

        // echo $shuffled;

        $this->validate($request, [
            'nama_pelapor' => 'required',
            'alamat_email' => 'required',
            'no_telepon' => 'required',
            'nama_meninggal' => 'required',
            'keterangan' => 'required',
            'waktu_kematian' => 'required',
        ]);

        Laporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'alamat_email' => $request->alamat_email,
            'no_telepon' => $request->no_telepon,
            'nama_meninggal' => $request->nama_meninggal,
            'keterangan' => $request->keterangan,
            'waktu_kematian' => $request->waktu_kematian,
            'link' => $shuffled,
        ]);

        $data = Laporan::where('link', '=', $shuffled)->get();

        foreach ($data as $data) {
            $laporan_id = $data->id;
        }

        Log::create([
            'user_id' => 0,
            'laporan_id' => $laporan_id,
            'keterangan' => 'Input Laporan Kematian',
        ]);

        return redirect('/berhasil');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function santunan_store(Request $request)
    {
        $ktp_meninggal = "assets/dokumen/no-image-available.png";
        $kk_meninggal = "assets/dokumen/no-image-available.png";
        $ktp_saksi_1 = "assets/dokumen/no-image-available.png";
        $ktp_saksi_2 = "assets/dokumen/no-image-available.png";
        $surat_keterangan_meninggal = "assets/dokumen/no-image-available.png";

        if ($request->hasFile('ktp_meninggal')) {
            $ktp_meninggal = $request->file('ktp_meninggal')->store('assets/dokumen/'.$request->laporan_id);
        }

        if ($request->hasFile('kk_meninggal')) {
            $kk_meninggal = $request->file('kk_meninggal')->store('assets/dokumen/'.$request->laporan_id);
        }

        if ($request->hasFile('ktp_saksi_1')) {
            $ktp_saksi_1 = $request->file('ktp_saksi_1')->store('assets/dokumen/'.$request->laporan_id);
        }

        if ($request->hasFile('ktp_saksi_2')) {
            $ktp_saksi_2 = $request->file('ktp_saksi_2')->store('assets/dokumen/'.$request->laporan_id);
        }

        if ($request->hasFile('surat_keterangan_meninggal')) {
            $surat_keterangan_meninggal = $request->file('surat_keterangan_meninggal')->store('assets/dokumen/'.$request->laporan_id);
        }

        $this->validate($request, [
            'nik_meninggal' => 'required',
            'nama_meninggal' => 'required',
            'ktp_meninggal' => 'required',
            'kk_meninggal' => 'required',
            'ktp_saksi_1' => 'required',
            'ktp_saksi_2' => 'required',
        ]);

        Pengajuan_santunan::create([
            'laporan_id' => $request->laporan_id,
            'nik_meninggal' => $request->nik_meninggal,
            'nama_meninggal' => $request->nama_meninggal,
            'ktp_meninggal' => $ktp_meninggal,
            'kk_meninggal' => $kk_meninggal,
            'ktp_saksi_1' => $ktp_saksi_1,
            'ktp_saksi_2' => $ktp_saksi_2,
            'surat_keterangan_meninggal' => $surat_keterangan_meninggal,
            'status' => '0',
        ]);

        Log::create([
            'user_id' => 0,
            'laporan_id' => $request->laporan_id,
            'keterangan' => 'Input Pengajuan Santunan Kematian',
        ]);

        return redirect()->route('laporan.show', $request->link);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($laporan)
    {
        $data = Laporan::where('link', '=', $laporan)->get();

        foreach ($data as $data_content) {
            $laporan_id = $data_content->id;
        }

        $pengajuan = Pengajuan_santunan::where('laporan_id', '=', $laporan_id)->get();
        $log = Log::select('logs.*', 'users.name')
                   ->leftjoin('users', 'users.id', '=', 'logs.user_id')
                   ->where('laporan_id', '=', $laporan_id)
                   ->orderBy('created_at', 'DESC')->get();

        return view('user.laporan', [
            'title' => 'Data Laporan',
            'log' => $log,
            'data' => $data,
            'pengajuan' => $pengajuan,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function santunan_destroy(Pengajuan_santunan $pengajuan)
    {
        $data = Laporan::where('id', '=', $pengajuan->laporan_id)->get();

        foreach ($data as $data) {
            $link = $data->link;
        }

        Log::create([
            'user_id' => 0,
            'laporan_id' => $pengajuan->laporan_id,
            'keterangan' => 'Hapus Pengajuan Santunan Kematian',
        ]);

        $pengajuan->delete();
        return redirect()->route('laporan.show', $link);
    }
}