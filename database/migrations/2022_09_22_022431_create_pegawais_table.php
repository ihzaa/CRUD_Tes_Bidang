<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 50);
            $table->string('name');
            $table->string('email', 50);
            $table->text('address');
            $table->unsignedBigInteger('id_jabatan');
            $table->integer('jenis_kelamin');
            $table->timestamps();

            $table->foreign('id_jabatan')->references('id')->on('ref_jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_pegawai');
    }
}
