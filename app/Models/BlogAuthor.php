<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogAuthor extends Model
{
    use HasFactory;
    protected $table = "blog_authors";
    protected $primaryKey = "id";

    public $fillable = [
        "name",
        "email",
        "photo",
        "bio",
        "github_handle",
        "twitter_handle",
    ];

    public function posts(){
        return $this->hasMany(BlogPost::class, 'blog_author_id');
    }
}
