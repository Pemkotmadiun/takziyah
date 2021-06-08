<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKeteranganOnLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laporans', function (Blueprint $table) {
            $table->text('keterangan_validasi_dukcapil')->nullable(true);
            $table->text('keterangan_validasi_dinsos')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laporans', function (Blueprint $table) {
            $table->dropColumn('keterangan_validasi_dukcapil');
            $table->dropColumn('keterangan_validasi_dinsos');
        });
    }
}
