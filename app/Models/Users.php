<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $guarded = ['user_id'];
    protected $fillable = ['email', 'no_telepon', 'password'];

    public function siswa(){
        return $this->hasMany('App\Siswa');
    }

    public function ayahsiswa(){
        return $this->hasMany('App\AyahSiswa');
    }

    public function ibusiswa(){
        return $this->hasMany('App\IbuSiswa');
    }

    public function alamat(){
        return $this->hasMany('App\Alamat');
    }

    public function prestasi(){
        return $this->hasMany('App\Prestasi');
    }
}
