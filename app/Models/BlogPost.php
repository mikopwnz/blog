<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'content_raw',
        'category_id',
        'slug',
        'excerpt',
        'is_published',
        'published_at',
        'user_id'
    ];

    const UNKNOWN_USER = 1;

    public function category()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCategoryTitleAttribute()
    {
        $title = $this->category->title ?? 'Нет категории';
        return $title;
    }
}
