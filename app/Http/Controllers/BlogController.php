<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\BlogAuthor;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with('author', 'category')->paginate(10);
        $categories = BlogCategory::select(
            "id",
            "name",
            "slug",
        )->get();
        $authors = BlogAuthor::get();
        return view('welcome', compact('posts', 'categories', 'authors'));
    }
}
