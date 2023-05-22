<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IbuSiswa extends Model
{
    use HasFactory;
    protected $table = 'ibusiswa';
    public $primaryKey = 'id_ibu';
    public $uniqueKey = 'id_siswa';
    protected $fillable = [
        'nama_ibu', 'NIK', 'tempat_lahir', 'tanggal_lahir', 'agama', 'status', 'kewarganegaraan', 'riwayat_pendidikan', 'rata_penghasilan',
        'pekerjaan', 'no_telepon', 'KTP'
    ];

    public function siswa(){
        return $this->belongsTo('App\Siswa');
    }
}
