<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public $blog, $category;
    public function index(){
        return view('admin.category.create',[
            'categories'=>Category::latest()->get(),
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|unique:categories',
            'description'=>'nullable',
        ]);

        $this->blog = new Category();
        $this->blog->name = $request->name;
        $this->blog->status = $request->status;
        $this->blog->description = $request->description;
        $this->blog->slug = Str::slug($request->name, '-');
        $this->blog->save();
        return redirect()->back()->with('success','Category Created Successfully');
    }

    public function delete($id){
        $category_default_id = Category::where('name','Uncategorized')->first()->id;
        $this->category = Category::find($id);
        if ($this->category-> name === 'Uncategorized')
            abort(404);

        $this->category->blogs()->update(['category_id'=>$category_default_id]);
        $this->category->delete();
        return redirect()->back()->with('success', 'Category Has been deleted.');
    }
}
