<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'content','user_id','blog_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function blog(){
        return $this->belongsTo(Blog::class);
    }
    public function users(){
        return $this->belongsToMany(User::class, 'comment_user', 'comment_id', 'user_id');
    }
}
