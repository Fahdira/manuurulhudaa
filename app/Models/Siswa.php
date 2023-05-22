<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    public $primaryKey = 'id_siswa';
    public $uniqueKey = 'user_id';
    protected $fillable = [
        'tahun_pendaftaran', 'nama_siswa', 'NIK', 'NISN', 'tempat_lahir', 'tanggal_lahir', 'kelamin', 'kewarganegaraan', 'anak_ke',
        'dari_bersaudara', 'agama', 'asal_sekolah', 'keb_khusus', 'keb_disbilitas', 'kartu_keluarga', 'akta_kelahiran', 'pas_foto'
    ];


    public function users(){
        return $this->belongsTo('App\Users');
    }

    public function pendaftaran(){
        return $this->hasOne('App\Pendaftaran');
    }
}
