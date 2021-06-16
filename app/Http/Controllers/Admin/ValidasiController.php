<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Pengajuan_santunan;
use App\Laporan;
use App\Log;
use Illuminate\Support\Facades\Mail;

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

        $cek_data = Pengajuan_santunan::where('laporan_id', $request->id)->get();

        $hasil = 0;
        foreach ($cek_data as $cek_data) {
            $validasi_surat_permohonan_santunan = $cek_data->validasi_surat_permohonan_santunan;
            $validasi_ktp_masyarakat_meninggal = $cek_data->validasi_ktp_masyarakat_meninggal;
            $validasi_akta_kematian = $cek_data->validasi_akta_kematian;
            $validasi_ktp_ahli_waris = $cek_data->validasi_ktp_ahli_waris;
            $validasi_kk_ahli_waris = $cek_data->validasi_kk_ahli_waris;
            $validasi_surat_pernyataan_ahli_waris = $cek_data->validasi_surat_pernyataan_ahli_waris;
            $validasi_akta_kelahiran_ahli_waris = $cek_data->validasi_akta_kelahiran_ahli_waris;
            $validasi_rekening_ahli_waris = $cek_data->validasi_rekening_ahli_waris;
        }

        if(
            !is_null($validasi_surat_permohonan_santunan) && 
            !is_null($validasi_ktp_masyarakat_meninggal) && 
            !is_null($validasi_akta_kematian) && 
            !is_null($validasi_ktp_ahli_waris) && 
            !is_null($validasi_kk_ahli_waris) && 
            !is_null($validasi_surat_pernyataan_ahli_waris) && 
            !is_null($validasi_akta_kelahiran_ahli_waris) && 
            !is_null($validasi_rekening_ahli_waris) 
        ){
            // echo "Telah divalidasi semua, ";

            if (
                $validasi_surat_permohonan_santunan == 1 &&
                $validasi_ktp_masyarakat_meninggal == 1 &&
                $validasi_akta_kematian == 1 &&
                $validasi_ktp_ahli_waris == 1 &&
                $validasi_kk_ahli_waris == 1 &&
                $validasi_surat_pernyataan_ahli_waris == 1 &&
                $validasi_akta_kelahiran_ahli_waris == 1 &&
                $validasi_rekening_ahli_waris == 1 
            ) {
                $jenis = 'Validasi Dinsos, PP dan PA : Diterima';
                $keterangan = 'Silahkan datang ke Dinas Sosial, PP dan PA Kota Madiun dengan membawa dokumen persayaratan.';
                $status_validasi_dinsos = 1;

                echo "Dokumen Diterima!</br>";
            }else{
                $jenis = 'Validasi Dinsos, PP dan PA : Ditolak';
                $keterangan = 'Silahkan upload ulang dokumen dengan ditolak.';
                $status_validasi_dinsos = 0;

                // echo "Dokumen Ditolak!</br>";
            }

            //======================== Kirim Email Informasi Validasi Dinsos ========================//
            $laporan = Laporan::where('id', '=', $request->id)->get();
            foreach ($laporan as $laporan) {
                $email = $laporan->alamat_email;
                $name = $laporan->nama_pelapor;
                $link = $laporan->link;
            }

            // echo "email : $email</br>";
            // echo "name : $name</br>";
            // echo "link : $link</br>";
    
            //Siapkan Data
            $data = array(
                'email' => $email,
                'name' => $name,
                'link' => $link,
                'jenis' => $jenis,
                'keterangan' => $keterangan,
            );

            // echo "Kirim email notifikasi";
    
            // Kirim Email
            Mail::send('email_validasi_dinsos', $data, function($mail) use($email) {
                $mail->to($email, 'no-reply')
                        ->subject("Validasi Dinas Sosial, PP dan PA Kota Madiun");
                $mail->from('magang@madiunkota.go.id', 'Takziyah Kota Madiun');
            });
    
            // Cek kegagalan
            if (Mail::failures()) {
                return "Gagal mengirim Email";
            }
        }else{
            // echo "Proses Validasi";
            $status_validasi_dinsos = 2;
        }

        Laporan::where('id', $request->id)->update(['validasi_dinsos' => $status_validasi_dinsos]);

        return redirect()->route('admin.laporan.show', $request->id);
    }
}
