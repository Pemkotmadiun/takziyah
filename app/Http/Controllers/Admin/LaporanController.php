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

        return view('admin.laporan.show', [
            'title' => 'Detail Laporan Kematian',
            'log' => $log,
            'data' => $data,
            'pengajuan' => $pengajuan,
            'penerbitan' => $penerbitan,
            'kelurahan' => $kelurahan,
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

            Laporan::where('id', $request->laporan_id)->update(['validasi_dukcapil' => '0']);
        }

        return redirect()->route('admin.laporan.show', $request->laporan_id);
    }
}