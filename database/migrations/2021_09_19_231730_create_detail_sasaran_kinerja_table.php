<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSasaranKinerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_sasaran_kinerja', function (Blueprint $table) {
            $table->id();
            $table->Integer("sasaran_kinerja_id")->nullable();
            $table->Integer("volume")->nullable();
            $table->Integer("satuan")->nullable();
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
        Schema::dropIfExists('detail_sasaran_kinerja');
    }
}
