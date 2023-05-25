<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'post';
    public $primaryKey = 'post_id';
    protected $fillable = [
        'admin_id', 'title', 'description', 'image'
    ];

    public function admin(){
        return $this->belongsTo('App\Admin');
    }
}
