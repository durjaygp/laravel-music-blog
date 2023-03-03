<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontBlogController extends Controller
{
    public function blog(){
        return view('frontEnd.blog.single');
    }

}
