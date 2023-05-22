<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ibu_siswa', function (Blueprint $table) {
            $table->id('id_ibu');
            $table->string('nama_ayah');
            $table->integer('NIK');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('status');
            $table->string('kewarganegaraan');
            $table->string('riwayat_pendidikan');
            $table->string('rata_penghasilan');
            $table->string('pekerjaan');
            $table->integer('no_telepon');
            $table->string('KTP');
            $table->integer('id_siswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibu_siswa');
    }
};
