<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerbitansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerbitans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('laporan_id')->nullable(true);
            $table->string('nik_valid')->nullable(true);
            $table->string('nama_lengkap_valid')->nullable(true);
            $table->string('akte_kematian')->nullable(true);
            $table->string('ktp')->nullable(true);
            $table->string('kk')->nullable(true);
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
        Schema::dropIfExists('penerbitans');
    }
}
