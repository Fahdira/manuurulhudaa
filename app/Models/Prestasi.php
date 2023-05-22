<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    protected $table = 'prestasi';
    public $primaryKey = 'id_prestasi';
    public $uniqueKey = 'id_siswa';
    protected $fillable = [
        'nama_prestasi', 'tingkat', 'peringkat_ke', 'tahun', 'sertifikat'
    ];

    public function siswa(){
        return $this->belongsTo('App\Siswa');
    }
}
