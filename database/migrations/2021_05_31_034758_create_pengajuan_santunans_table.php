<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanSantunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_santunans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('laporan_id')->nullable(true);
            $table->string('nik_meninggal')->nullable(true);
            $table->string('nama_meninggal')->nullable(true);
            $table->string('ktp_meninggal')->nullable(true);
            $table->string('kk_meninggal')->nullable(true);
            $table->string('ktp_saksi_1')->nullable(true);
            $table->string('ktp_saksi_2')->nullable(true);
            $table->string('surat_keterangan_meninggal')->nullable(true);
            $table->datetime('waktu_kematian')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_santunans');
    }
}
