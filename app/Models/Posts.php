<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    public $primaryKey = 'post_id';
    public $uniqueKey = 'admin_id';
    protected $fillable = [
        'title', 'description', 'image'
    ];

    public function admin(){
        return $this->belongsTo('App\Admin');
    }
}
