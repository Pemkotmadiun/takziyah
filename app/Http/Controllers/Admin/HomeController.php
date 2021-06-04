<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Laporan;

class HomeController extends Controller
{
    public function index()
    {
        $baru = Laporan::where('status', '=', '0')->orderBy('created_at', 'DESC')->get();
        return view('Admin.home', [
            'title' => 'Dashboard',
            'baru' => $baru,
        ]);
    }
}
