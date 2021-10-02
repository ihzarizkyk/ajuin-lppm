<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggiatKerjasamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggiat_kerjasama', function (Blueprint $table) {
            $table->id();
            $table->string('penggiat');
            $table->string('instansi');
            $table->string('alamat');
            $table->string('nama');
            $table->string('jabatan');
            $table->integer('kerjasama_id')->nullable();
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
        Schema::dropIfExists('pengggiat__kerjasama');
    }
}
