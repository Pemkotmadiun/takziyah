<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Laporan;

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
        ]);

        Laporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'alamat_email' => $request->alamat_email,
            'no_telepon' => $request->no_telepon,
            'nama_meninggal' => $request->nama_meninggal,
            'keterangan' => $request->keterangan,
            'link' => $shuffled,
        ]);

        return redirect('/berhasil');
    }
}
