<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerjasamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerjasama', function (Blueprint $table) {
            $table->id();
            $table->string('perihal_kerjasama');
            $table->string('unit_pelaksana');
            $table->text('deskripsi');
            $table->text('rencana');
            $table->string('aktif');
            $table->date('lama_kerjasama');
            $table->string('anggaran')->nullable();
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
        Schema::dropIfExists('kerjasama');
    }
}
