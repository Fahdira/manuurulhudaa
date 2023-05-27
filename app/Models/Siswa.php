<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    public $primaryKey = 'id_siswa';
    protected $fillable = [
        'user_id', 'tahun_pendaftaran', 'nama_siswa', 'NIK', 'NISN', 'tempat_lahir', 'tanggal_lahir', 'kelamin', 'kewarganegaraan', 'anak_ke',
        'dari_bersaudara', 'agama', 'asal_sekolah', 'keb_khusus', 'keb_disbilitas', 'kartu_keluarga', 'akta_kelahiran', 'pas_foto'
    ];

    protected $attributes = [
        'keb_khusus' => 'Tidak Ada',
        'keb_disabilitas' => 'Tidak Ada',
        'status_kelulusan' => 'Sedang Di Proses',
        'status_pembayaran' => 'Belum',
    ];


    public function getUsers(){
        return $this->hasOne(Users::class, 'id', 'user_id');
    }
}
