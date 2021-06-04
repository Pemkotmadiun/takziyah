<?php

namespace App\Http\Controllers\Admin;

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
    public function show($laporan)
    {
        $data = Laporan::where('id', '=', $laporan)->get();

        $pengajuan = Pengajuan_santunan::where('laporan_id', '=', $laporan)->get();
        $log = Log::select('logs.*', 'users.name')
                   ->leftjoin('users', 'users.id', '=', 'logs.user_id')
                   ->where('laporan_id', '=', $laporan)
                   ->orderBy('created_at', 'DESC')->get();

        return view('admin.laporan.show', [
            'title' => 'Detail Laporan Kematian',
            'log' => $log,
            'data' => $data,
            'pengajuan' => $pengajuan,
        ]);
    }
}