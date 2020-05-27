<?php

namespace App\Models;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }

    public function tags()
    {
        return $this->hasMany(Tag::class, 'tag_id', 'id');
    }
}

