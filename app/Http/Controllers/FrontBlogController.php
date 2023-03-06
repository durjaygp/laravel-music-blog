<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class FrontBlogController extends Controller
{
    public function blog($slug){
        return view('frontEnd.blog.single',[
            'blog'=> Blog::with('category','user')->where('slug', $slug)->first(),
        ]);
    }

    public function categoryWiseBlog($slug){
        $category= Category::where('slug', $slug)->first();
        return view('frontEnd.category.categoryWiseBlog',[
            'category'=>$category,
            'blogs'=> Blog::with('category','user')->where('category_id', $category->id)->latest()->paginate(10),
        ]);
    }

    public function authorWiseBlog($id){
        $author= User::find($id);
        return view('frontEnd.author.authorWiseBlog',[
            'author'=>$author,
            'blogs'=> Blog::with('category','user')->where('user_id', $id)->latest()->paginate(10),
        ]);
    }

    public function searchWiseBlog(Request $request){
       $this->search = Blog::with('category','user')->where('title','LIKE',"%{$request->search}%")->latest()->paginate(10);
       // return $search;
        return view('frontEnd.blog.searchWiseBlog',[
            'search'=> $request->search,
            'blogs'=> $this->search,
        ]); 
    }

}
