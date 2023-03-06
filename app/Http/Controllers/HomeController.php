<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $features = Blog::with('category','user')->where('feature', 1)->latest()->take(5)->get();

        return view('frontEnd.home.home',[
            'blogs'=>Blog::with('category','user')->latest()->paginate(9),
        ], compact('features'));
    }
}
