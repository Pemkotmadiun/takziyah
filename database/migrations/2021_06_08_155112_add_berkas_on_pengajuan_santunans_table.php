<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBerkasOnPengajuanSantunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengajuan_santunans', function (Blueprint $table) {
            $table->string('surat_permohonan_santunan')->nullable(true);
            $table->string('ktp_masyarakat_meninggal')->nullable(true);
            $table->string('akta_kematian')->nullable(true);
            $table->string('ktp_ahli_waris')->nullable(true);
            $table->string('kk_ahli_waris')->nullable(true);
            $table->string('surat_pernyataan_ahli_waris')->nullable(true);
            $table->string('akta_kelahiran_ahli_waris')->nullable(true);
            $table->string('rekening_ahli_waris')->nullable(true);
            $table->string('validasi_surat_permohonan_santunan', 2)->nullable(true);
            $table->string('validasi_ktp_masyarakat_meninggal', 2)->nullable(true);
            $table->string('validasi_akta_kematian', 2)->nullable(true);
            $table->string('validasi_ktp_ahli_waris', 2)->nullable(true);
            $table->string('validasi_kk_ahli_waris', 2)->nullable(true);
            $table->string('validasi_surat_pernyataan_ahli_waris', 2)->nullable(true);
            $table->string('validasi_akta_kelahiran_ahli_waris', 2)->nullable(true);
            $table->string('validasi_rekening_ahli_waris', 2)->nullable(true);
            $table->string('keterangan_surat_permohonan_santunan')->nullable(true);
            $table->string('keterangan_ktp_masyarakat_meninggal')->nullable(true);
            $table->string('keterangan_akta_kematian')->nullable(true);
            $table->string('keterangan_ktp_ahli_waris')->nullable(true);
            $table->string('keterangan_kk_ahli_waris')->nullable(true);
            $table->string('keterangan_surat_pernyataan_ahli_waris')->nullable(true);
            $table->string('keterangan_akta_kelahiran_ahli_waris')->nullable(true);
            $table->string('keterangan_rekening_ahli_waris')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengajuan_santunans', function (Blueprint $table) {
            //
        });
    }
}
