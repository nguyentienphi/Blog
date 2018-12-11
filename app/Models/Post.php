<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'body'
	];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function sortPost()
    {
        return Post::orderBy('created_at', 'desc');
    }

    public function comments()
    {
        return $this->HasMany(Comment::class);
    }
}
