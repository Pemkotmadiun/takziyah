<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\log;
use App\Laporan;
use App\Penerbitan;
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
            'jenis' => 'Input Laporan Kematian',
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
        $surat_permohonan_santunan = "assets/dokumen/no-image-available.png";
        $ktp_masyarakat_meninggal = "assets/dokumen/no-image-available.png";
        $akta_kematian = "assets/dokumen/no-image-available.png";
        $ktp_ahli_waris = "assets/dokumen/no-image-available.png";
        $kk_ahli_waris = "assets/dokumen/no-image-available.png";
        $surat_pernyataan_ahli_waris = "assets/dokumen/no-image-available.png";
        $akta_kelahiran_ahli_waris = "assets/dokumen/no-image-available.png";
        $rekening_ahli_waris = "assets/dokumen/no-image-available.png";

        if ($request->hasFile('surat_permohonan_santunan')) {
            $surat_permohonan_santunan = $request->file('surat_permohonan_santunan')->store('assets/dokumen/'.$request->laporan_id.'/pengajuan');
        }

        if ($request->hasFile('ktp_masyarakat_meninggal')) {
            $ktp_masyarakat_meninggal = $request->file('ktp_masyarakat_meninggal')->store('assets/dokumen/'.$request->laporan_id.'/pengajuan');
        }

        if ($request->hasFile('akta_kematian')) {
            $akta_kematian = $request->file('akta_kematian')->store('assets/dokumen/'.$request->laporan_id.'/pengajuan');
        }

        if ($request->hasFile('ktp_ahli_waris')) {
            $ktp_ahli_waris = $request->file('ktp_ahli_waris')->store('assets/dokumen/'.$request->laporan_id.'/pengajuan');
        }

        if ($request->hasFile('kk_ahli_waris')) {
            $kk_ahli_waris = $request->file('kk_ahli_waris')->store('assets/dokumen/'.$request->laporan_id.'/pengajuan');
        }

        if ($request->hasFile('surat_pernyataan_ahli_waris')) {
            $surat_pernyataan_ahli_waris = $request->file('surat_pernyataan_ahli_waris')->store('assets/dokumen/'.$request->laporan_id.'/pengajuan');
        }

        if ($request->hasFile('akta_kelahiran_ahli_waris')) {
            $akta_kelahiran_ahli_waris = $request->file('akta_kelahiran_ahli_waris')->store('assets/dokumen/'.$request->laporan_id.'/pengajuan');
        }

        if ($request->hasFile('rekening_ahli_waris')) {
            $rekening_ahli_waris = $request->file('rekening_ahli_waris')->store('assets/dokumen/'.$request->laporan_id.'/pengajuan');
        }

        $this->validate($request, [
            'nik_meninggal' => 'required',
            'nama_meninggal' => 'required',
        ]);

        Pengajuan_santunan::create([
            'laporan_id' => $request->laporan_id,
            'nik_meninggal' => $request->nik_meninggal,
            'nama_meninggal' => $request->nama_meninggal,
            'surat_permohonan_santunan' => $surat_permohonan_santunan,
            'ktp_masyarakat_meninggal' => $ktp_masyarakat_meninggal,
            'akta_kematian' => $akta_kematian,
            'ktp_ahli_waris' => $ktp_ahli_waris,
            'kk_ahli_waris' => $kk_ahli_waris,
            'surat_pernyataan_ahli_waris' => $surat_pernyataan_ahli_waris,
            'akta_kelahiran_ahli_waris' => $akta_kelahiran_ahli_waris,
            'rekening_ahli_waris' => $rekening_ahli_waris,
            'status' => '0',
        ]);

        Log::create([
            'user_id' => 0,
            'laporan_id' => $request->laporan_id,
            'jenis' => 'Input Pengajuan Santunan Kematian',
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

        $penerbitan = Penerbitan::where('laporan_id', '=', $laporan_id)->get();

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
            'penerbitan' => $penerbitan,
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
            'jenis' => 'Hapus Pengajuan Santunan Kematian',
        ]);

        $pengajuan->delete();
        return redirect()->route('laporan.show', $link);
    }
}