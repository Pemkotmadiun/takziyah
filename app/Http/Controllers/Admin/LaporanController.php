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

        Pengajuan_santunan::create([
            
        ]);

        Log::create([
            'user_id' => 0,
            'laporan_id' => $request->laporan_id,
            'keterangan' => 'Input Pengajuan Santunan Kematian',
        ]);

        return redirect()->route('laporan.show', $request->link);
    }
}