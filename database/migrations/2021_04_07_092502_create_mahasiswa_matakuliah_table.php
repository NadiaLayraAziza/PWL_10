<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaMatakuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_matakuliah', function (Blueprint $table) {
            $table->id();
            $table->string('mahasiswa_id',15)->nullable();
            //menambah foreign key di kolom mahasiswa_id
            $table->foreign('mahasiswa_id')->references('Nim')->on('mahasiswa'); 
            $table->unsignedBigInteger('matakuliah_id')->nullable();
            //menambah foreign key di kolom matakuliah_id
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah'); 
            $table->integer('nilai');  
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
        Schema::dropIfExists('mahasiswa_matakuliah');
    }
}
