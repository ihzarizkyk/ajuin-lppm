<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKerjasamaIdToBentukKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bentuk_kegiatan', function (Blueprint $table) {
            $table->unsignedBigInteger('kerjasama_id');
            $table->unsignedBigInteger('sasaran_id');
            $table->unsignedBigInteger('indikator_id');
            $table->unsignedBigInteger('master_kegiatan_id');
            $table->string('keterangan');
            $table->string('luaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bentuk_kegiatan', function (Blueprint $table) {
            //
        });
    }
}
