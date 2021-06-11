<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Pengajuan_santunan;
use App\Log;

class ValidasiController extends Controller
{
    public function validasi(Request $request)
    {
        $dokumen = $request->dokumen;
        $id = $request->pengajuan_santunan;
        return view('admin.laporan.validasi_dinsos', [
            'dokumen' => $dokumen,
            'id' => $id,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pengajuan_santunan $pengajuan_santunan)
    {
        $column_validasi = 'validasi_'.$request->dokumen;
        $column_keterangan = 'keterangan_'.$request->dokumen;

        DB::table('pengajuan_santunans')
        ->where('laporan_id', $request->id)
        ->update(
            [
                $column_validasi => $request->validasi,
                $column_keterangan => $request->keterangan,
            ]
        );
        
        $status = '';
        $jenis = '';

        if($request->validasi == '1'){
            $status = 'Diterima';
        }else
        if($request->validasi == '0') {
            $status = 'Ditolak';
        }

        if($request->dokumen == 'surat_permohonan_santunan'){
            $jenis = 'Validasi Surat Permohonan Santunan Kematian : '.$status;
        }
        if ($request->dokumen == 'ktp_masyarakat_meninggal') {
            $jenis = 'Validasi KTP-EL Masyarakat yang Meninggal : '.$status;
        }
        if ($request->dokumen == 'akta_kematian') {
            $jenis = 'Validasi Akta Kematian atau Surat Keterangan Lahir Mati : '.$status;
        }
        if ($request->dokumen == 'ktp_ahli_waris') {
            $jenis = 'Validasi KTP-EL Ahli Waris : '.$status;
        }
        if ($request->dokumen == 'kk_ahli_waris') {
            $jenis = 'Validasi KK Ahli Waris : '.$status;
        }
        if ($request->dokumen == 'surat_pernyataan_ahli_waris') {
            $jenis = 'Validasi Surat Pernyataan Ahli Waris : '.$status;
        }
        if ($request->dokumen == 'akta_kelahiran_ahli_waris') {
            $jenis = 'Validasi Akta Kelahiran Bagi Ahli Waris yang Belum Memiliki KTP-EL : '.$status;
        }
        if ($request->dokumen == 'rekening_ahli_waris') {
            $jenis = 'Validasi Rekening Atas Nama Ahli Waris : '.$status;
        }

        Log::create([
            'user_id' => auth()->user()->id,
            'laporan_id' => $request->id,
            'jenis' => $jenis,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin.laporan.show', $request->id);
    }
}
