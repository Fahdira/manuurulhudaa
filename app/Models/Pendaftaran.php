<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran';
    public $primaryKey = 'id_pendaftaran';
    protected $fillable = [
        'tahun_pendaftaran', 'status_pendaftaran', 'desc_pendaftaran', 'tahun_pendaftaran'
    ];

    public function siswa(){
        return $this->belongsTo('App\Siswa');
    }
}
