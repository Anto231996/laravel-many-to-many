<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'author',
        'content',
        'image_url',
    ];

    public function categories(){
        return $this->belongsToMany('App\Category');
    }
}