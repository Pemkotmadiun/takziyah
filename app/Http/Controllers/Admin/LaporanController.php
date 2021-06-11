<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\log;
use App\Laporan;
use App\Kelurahan;
use App\Penerbitan;
use App\Pengajuan_santunan;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($laporan)
    {
        $data = Laporan::where('id', '=', $laporan)->get();

        foreach ($data as $data_validasi) {
            $validasi_dukcapil = $data_validasi->validasi_dukcapil;
            $validasi_dinsos = $data_validasi->validasi_dinsos;
            $keterangan_validasi_dukcapil = $data_validasi->keterangan_validasi_dukcapil;
            $keterangan_validasi_dinsos = $data_validasi->keterangan_validasi_dinsos;
            $id = $data_validasi->id;
        }

        $pengajuan = Pengajuan_santunan::where('laporan_id', '=', $laporan)->get();

        $penerbitan = Penerbitan::where('laporan_id', '=', $laporan)->get();

        $kelurahan = Kelurahan::join('kecamatans', 'kecamatans.id', '=', 'kelurahans.kecamatan_id')
                              ->select('kelurahans.id', 'kecamatans.kecamatan', 'kelurahans.kelurahan')
                              ->orderBy('kecamatans.kecamatan', 'ASC')
                              ->orderBy('kelurahans.kelurahan', 'ASC')
                              ->get();

        $log = Log::select('logs.*', 'users.name')
                   ->leftjoin('users', 'users.id', '=', 'logs.user_id')
                   ->where('laporan_id', '=', $laporan)
                   ->orderBy('created_at', 'DESC')->get();

        if(auth()->user()->level == 3){
            $file = 'admin.laporan.show';
        }else
        if (auth()->user()->level == 4) {
            $file = 'admin.laporan.show_dinsos';
        }

        return view($file, [
            'title' => 'Detail Laporan Kematian',
            'log' => $log,
            'id' => $id,
            'data' => $data,
            'pengajuan' => $pengajuan,
            'penerbitan' => $penerbitan,
            'kelurahan' => $kelurahan,
            'validasi_dukcapil' => $validasi_dukcapil,
            'validasi_dinsos' => $validasi_dinsos,
            'keterangan_validasi_dukcapil' => $keterangan_validasi_dukcapil,
            'keterangan_validasi_dinsos' => $keterangan_validasi_dinsos,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function keseluruhan()
    {
        $data = Laporan::orderBy('created_at', 'DESC')->get();

        return view('admin.laporan.data', [
            'title' => 'Laporan Keseluruhan',
            'data' => $data,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function baru()
    {
        if(auth()->user()->level == 3){
            $data = Laporan::whereNull('validasi_dukcapil')->orderBy('created_at', 'DESC')->get();
        }else
        if (auth()->user()->level == 4) {
            $data = Laporan::whereNull('validasi_dinsos')->orderBy('created_at', 'DESC')->get();
        }

        return view('admin.laporan.data', [
            'title' => 'Laporan Baru',
            'data' => $data,
        ]);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function diterima()
    {
        if(auth()->user()->level == 3){
            $data = Laporan::where('validasi_dukcapil', '=', '1')->orderBy('created_at', 'DESC')->get();
        }else
        if (auth()->user()->level == 4) {
            $data = Laporan::where('validasi_dinsos', '=', '1')->orderBy('created_at', 'DESC')->get();
        }

        return view('admin.laporan.data', [
            'title' => 'Laporan Diterima',
            'data' => $data,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ditolak()
    {
        if(auth()->user()->level == 3){
            $data = Laporan::where('validasi_dukcapil', '=', '0')->orderBy('created_at', 'DESC')->get();
        }else
        if (auth()->user()->level == 4) {
            $data = Laporan::where('validasi_dinsos', '=', '0')->orderBy('created_at', 'DESC')->get();
        }

        return view('admin.laporan.data', [
            'title' => 'Laporan Ditolak',
            'data' => $data,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validasi_store(Request $request)
    {
        $user_id = auth()->user()->id;
        if($request->validasi == 'Valid'){
            $this->validate($request, [
                'nik_valid' => 'required',
                'nama_lengkap_valid' => 'required',
            ]);

            $akte_kematian = "assets/dokumen/no-image-available.png";
            $ktp = "assets/dokumen/no-image-available.png";
            $kk = "assets/dokumen/no-image-available.png";
    
            if ($request->hasFile('akte_kematian')) {
                $akte_kematian = $request->file('akte_kematian')->store('assets/dokumen/'.$request->laporan_id.'/penerbitan');
            }
    
            if ($request->hasFile('ktp')) {
                $ktp = $request->file('ktp')->store('assets/dokumen/'.$request->laporan_id.'/penerbitan');
            }
    
            if ($request->hasFile('kk')) {
                $kk = $request->file('kk')->store('assets/dokumen/'.$request->laporan_id.'/penerbitan');
            }
    
            Penerbitan::create([
                'laporan_id' => $request->laporan_id,
                'nik_valid' => $request->nik_valid,
                'nama_lengkap_valid' => $request->nama_lengkap_valid,
                'akte_kematian' => $akte_kematian,
                'ktp' => $ktp,
                'kk' => $kk,
            ]);

            Log::create([
                'user_id' => $user_id,
                'laporan_id' => $request->laporan_id,
                'jenis' => 'Validasi Dukcapil : Diterima',
                'keterangan' => 'Akte Kematian Diterbitkan',
            ]);

            Laporan::where('id', $request->laporan_id)->update(['validasi_dukcapil' => '1']);
        }else
        if($request->validasi == 'Tidak Valid'){
            Log::create([
                'user_id' => $user_id,
                'laporan_id' => $request->laporan_id,
                'jenis' => 'Validasi Dukcapil : Ditolak',
                'keterangan' => $request->keterangan,
            ]);

            date_default_timezone_set("Asia/Jakarta");
            $waktu_validasi = date("Y-m-d H:i:s");

            Laporan::where('id', $request->laporan_id)->update(['validasi_dukcapil' => '0', 'waktu_validasi_dukcapil' => $waktu_validasi]);
        }

        return redirect()->route('admin.laporan.show', $request->laporan_id);
    }
}