<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'slug',
        'image',
    ];
    // relationship between user and posts
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    // function help to get images

    public function getFeatUredAttributes($image){
        return asset($image);
    }
}
