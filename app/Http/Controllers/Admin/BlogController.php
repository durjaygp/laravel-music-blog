<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public $blog;
    public function index(){
        $categories = Category::latest()->get();
        return view('admin.blog.create',compact('categories'));
    }
    public function store(Request $request){
        $request->validate([
           'title'=>'required|unique:blogs|max:255',
           'description'=>'required|max:150',
           'image'=>'required',
           'body'=>'required',
        ]);
        $this->blog = new Blog();
        $this->blog->title = $request->title;
        $this->blog->slug = Str::slug($request->title,'-');
        $this->blog->description = $request->description;
        $this->blog->body = $request->body;
        $this->blog->feature = $request->feature;
        $this->blog->category_id = $request->category_id;
        $this->blog->status = $request->status;
        $this->blog->user_id = auth()->user()->id;
        $this->blog->image = $this->saveImage($request);
        $this->blog->save();
        return redirect()->back()->with('success','Blog Created Successfully');
    }

    public $image, $imageName, $imageUrl, $directory;
    public function saveImage($request)
    {
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'upload/blog-image/';
        $this->imageUrl = $this->directory . $this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }

    public function manageBlog(){
        return view('admin.blog.manage',[
           'blogs'=>Blog::with('category')->latest()->get(),
        ]);
    }
}
