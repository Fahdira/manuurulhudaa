<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public $table = 'siswa';
    public $primaryKey = 'id_siswa';
    protected $fillable = [
        'tahun_pendaftaran', 'nama_siswa', 'NIK', 'NISN', 'tempat_lahir', 'tanggal_lahir', 'kelamin', 'kewarganegaraan', 'anak_ke',
        'dari_bersaudara', 'agama', 'asal_sekolah', 'keb_khusus', 'keb_disbilitas', 'kartu_keluarga', 'akta_kelahiran', 'pas_foto'
    ];


    public function pendaftaran(){
        return $this->hasOne('App\Pendaftaran');
    }
}
