<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id(); // Kolom 'id' (Primary Key, auto-increment)
            $table->string('nim')->unique(); // Kolom 'nim', harus unik
            $table->string('nama_mahasiswa'); // Kolom 'nama_mahasiswa'
            $table->string('email')->unique(); // Kolom 'email', harus unik
            $table->string('jurusan'); // Kolom 'jurusan'
            $table->unsignedBigInteger('dosen_id'); // Kolom 'dosen_id', foreign key
            $table->timestamps(); // Kolom 'created_at' dan 'updated_at'

            // Relasi Foreign Key
            $table->foreign('dosen_id')->references('id')->on('dosens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
