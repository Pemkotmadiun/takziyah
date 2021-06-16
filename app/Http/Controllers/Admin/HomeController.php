<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Laporan;

class HomeController extends Controller
{
    public function index()
    {
        if(auth()->user()->level == 3){
            $total = Laporan::get();
            $baru = Laporan::whereNull('validasi_dukcapil')->orderBy('created_at', 'DESC')->get();
            $ditolak = Laporan::where('validasi_dukcapil', '=', '0')->orderBy('created_at', 'DESC')->get();
            $diterima = Laporan::where('validasi_dukcapil', '=', '1')->orderBy('created_at', 'DESC')->get();
        }elseif (auth()->user()->level == 4) {
            $total = Laporan::join('pengajuan_santunans', 'pengajuan_santunans.laporan_id', '=', 'laporans.id')->select('laporans.*')->get();
            $baru = Laporan::join('pengajuan_santunans', 'pengajuan_santunans.laporan_id', '=', 'laporans.id')->select('laporans.*')->whereNull('laporans.validasi_dinsos')->orderBy('laporans.created_at', 'DESC')->get();
            $ditolak = Laporan::join('pengajuan_santunans', 'pengajuan_santunans.laporan_id', '=', 'laporans.id')->select('laporans.*')->where('laporans.validasi_dinsos', '=', '0')->orderBy('created_at', 'DESC')->get();
            $diterima = Laporan::join('pengajuan_santunans', 'pengajuan_santunans.laporan_id', '=', 'laporans.id')->select('laporans.*')->where('laporans.validasi_dinsos', '=', '1')->orderBy('laporans.created_at', 'DESC')->get();
        }
        
        return view('Admin.home', [
            'title' => 'Dashboard',
            'total' => $total,
            'baru' => $baru,
            'ditolak' => $ditolak,
            'diterima' => $diterima,
        ]);
    }
}
