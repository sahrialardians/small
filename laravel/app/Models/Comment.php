<?php

namespace App\Models;
use App\Models\Article;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guaded = [];

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
