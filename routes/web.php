<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\FrontBlogController;
use App\Http\Controllers\Admin\AdminUserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/blog/{slug}',[FrontBlogController::class, 'blog'])->name('blog');
Route::get('/category/{slug}',[FrontBlogController::class, 'categoryWiseBlog'])->name('category.wise.blog');
Route::get('/author/{id}',[FrontBlogController::class, 'authorWiseBlog'])->name('author.wise.blog');
Route::post('/search',[FrontBlogController::class, 'searchWiseBlog'])->name('search.wise.blog');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['prefix'=>'admin/','middleware'=>'auth'],function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    //-----Category Routes-----------
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    //-----Blog Routes---------------
    Route::get('/blog/add', [BlogController::class, 'index'])->name('admin.blog');
    Route::post('/blog/save', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/manage/' ,[BlogController::class, 'manageBlog'])->name('blog.manage');

    //-------User Settings------------

    Route::get('/user/settings', [AdminUserController::class, 'index'])->name('admin.user');
    Route::post('user/setting/update',[AdminUserController::class, 'update'])->name('admin.user.update');






});
