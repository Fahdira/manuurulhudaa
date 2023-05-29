<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IbuSiswa extends Model
{
    use HasFactory;
    protected $table = 'ibu_siswa';
    public $primaryKey = 'id_ibu';
    public $uniqueKey = 'id_siswa';
    protected $fillable = [
        'nama_ibu', 'NIK_ibu', 'tempat_lahir_ibu', 'tanggal_lahir_ibu', 'agama_ibu', 'status_ibu', 'kewarganegaraan_ibu', 'riwayat_pendidikan_ibu', 'rata_penghasilan_ibu',
        'pekerjaan_ibu', 'no_telepon_ibu', 'KTP_ibu','id_siswa'
    ];

    public function siswa(){
        return $this->belongsTo('App\Siswa');
    }
}
