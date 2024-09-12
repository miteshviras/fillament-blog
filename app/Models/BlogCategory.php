<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $table = "blog_categories";
    protected $primaryKey = "id";

    public $fillable = [
        "name",
        "slug",
        "description",
        "is_visible",
    ];

    public function posts(){
        return $this->hasMany(BlogPost::class, 'blog_category_id');
    }
}
