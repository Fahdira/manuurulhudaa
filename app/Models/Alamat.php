<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;
    protected $table = 'alamat';
    public $primaryKey = 'id_alamat';
    public $uniqueKey = 'id_siswa';
    protected $fillable = [
        'nama_jalan', 'desa', 'kabupaten_kota', 'provinsi', 'pobox'
    ];

    public function siswa(){
        return $this->belongsTo('App\Siswa');
    }
}
