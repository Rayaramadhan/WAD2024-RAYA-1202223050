<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id(); // Kolom 'id' (Primary Key, auto-increment)
            $table->string('kode_dosen', 3)->unique(); // Kolom 'kode_dosen', 3 karakter unik
            $table->string('nama_dosen'); // Kolom 'nama_dosen'
            $table->string('nip')->unique(); // Kolom 'nip', harus unik
            $table->string('email')->unique(); // Kolom 'email', harus unik
            $table->string('no_telepon'); // Kolom 'no_telepon', tidak harus unik
            $table->timestamps(); // Kolom 'created_at' dan 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosens');
    }
}
