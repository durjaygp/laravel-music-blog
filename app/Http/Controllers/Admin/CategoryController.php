<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public $blog;
    public function index(){
        return view('admin.category.create',[
            'categories'=>Category::latest()->get(),
        ]);
    }
    public function store(Request $request){
        $this->blog = new Category();
        $this->blog->name = $request->name;
        $this->blog->status = $request->status;
        $this->blog->slug = Str::slug($request->name, '-');
        $this->blog->save();
        return redirect()->back()->with('success','Category Created Successfully');
    }
}
