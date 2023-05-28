<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AyahSiswa extends Model
{
    use HasFactory;
    protected $table = 'ayahsiswa';
    public $primaryKey = 'id_ayah';
    public $uniqueKey = 'id_siswa';
    protected $fillable = [
        'nama_ayah', 'NIK', 'tempat_lahir', 'tanggal_lahir', 'agama', 'status', 'kewarganegaraan', 'riwayat_pendidikan', 'rata_penghasilan',
        'pekerjaan', 'no_telepon', 'KTP','id_siswa',
    ];

    public function siswa(){
        return $this->belongsTo('App\Siswa');
    }
}
