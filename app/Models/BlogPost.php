<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $table = "blog_posts";
    protected $primaryKey = "id";

    public $fillable = [
        "blog_author_id",
        "blog_category_id",
        "title",
        "slug",
        "excerpt",
        "banner",
        "content",
        "published_at",
    ];


    public function authors()
    {
        return $this->belongsTo(BlogAuthor::class, 'blog_author_id');
    }

    public function categories()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }
}
