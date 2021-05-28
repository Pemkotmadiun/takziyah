<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor', 100)->nullable(true);
            $table->string('alamat_email', 100)->nullable(true);
            $table->string('no_telepon', 20)->nullable(true);
            $table->string('nama_meninggal', 100)->nullable(true);
            $table->text('keterangan')->nullable(true);
            $table->text('link')->nullable(true);
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
        Schema::dropIfExists('laporans');
    }
}
