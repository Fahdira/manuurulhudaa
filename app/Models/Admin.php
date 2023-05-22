<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $guarded = ['admin_id'];
    protected $fillable = ['email', 'username', 'no_telepon', 'password', 'jabatan', 'profile_picture'];

    public function posts(){
        return $this->hasMany('App\Posts');
    }

}
