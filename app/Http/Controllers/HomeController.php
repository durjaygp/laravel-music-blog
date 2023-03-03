<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontEnd.home.home',[
            'blogs'=>Blog::with('category','user')->latest()->get(),
        ]);
    }
}
