<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Laporan;

class HomeController extends Controller
{
    public function index()
    {
        $total = Laporan::get();
        $baru = Laporan::whereNull('validasi_dukcapil')->orderBy('created_at', 'DESC')->get();
        $ditolak = Laporan::where('validasi_dukcapil', '=', '0')->orderBy('created_at', 'DESC')->get();
        $diterima = Laporan::where('validasi_dukcapil', '=', '1')->orderBy('created_at', 'DESC')->get();
        return view('Admin.home', [
            'title' => 'Dashboard',
            'total' => $total,
            'baru' => $baru,
            'ditolak' => $ditolak,
            'diterima' => $diterima,
        ]);
    }
}
