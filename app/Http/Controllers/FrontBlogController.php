<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontBlogController extends Controller
{
    public function blog($slug){
        return view('frontEnd.blog.single',[
            'blog'=> Blog::with('category','user')->where('slug', $slug)->first(),
            'recentblog'=>Blog::with('category','user')->latest()->take(5)->get(),
            'categories'=> Category::latest()->withCount('blogs')->orderBy('blogs_count', 'desc')->take(10)->get(),
        ]);
    }

}
