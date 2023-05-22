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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->string('tahun_pendaftaran');
            $table->string('nama_siswa');
            $table->integer('NIK');
            $table->integer('NISN');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('kelamin');
            $table->string('kewarganegaraan');
            $table->integer('anak_ke');
            $table->integer('dari_bersaudara');
            $table->string('agama');
            $table->string('asal_sekolah');
            $table->string('keb_khusus')->nullable();
            $table->string('keb_disabilitas')->nullable();
            $table->string('kartu_keluarga');
            $table->string('akta_kelahiran');
            $table->string('pas_foto');
            $table->boolean('status_kelulusan');
            $table->boolean('status_pembayaran');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
