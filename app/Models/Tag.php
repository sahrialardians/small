<?php

namespace App\Models;
use App\Models\Article;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function articleTags()
    {
        return $this->belongsToMany(Article::class, 'article_tags', 'article_id', 'tag_id');
    }
}
