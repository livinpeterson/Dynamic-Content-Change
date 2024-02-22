<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function blogpost()
    {
        $blogposts = BlogPost::all();
        $images = BlogPost::pluck('image')->toArray();
        return view('pages .blogpost', compact('blogposts', 'images')); //compact('banners'));
    }
}
