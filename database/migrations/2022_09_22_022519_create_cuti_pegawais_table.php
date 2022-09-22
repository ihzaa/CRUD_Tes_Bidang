<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCutiPegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans_cuti_pegawai', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pegawai');
            $table->date('tanggal_awal_cuti');
            $table->date('tanggal_akhir_cuti');
            $table->text('perihal_cuti');
            $table->timestamps();

            $table->foreign('id_pegawai')->references('id')->on('ref_pegawai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trans_cuti_pegawai');
    }
}
