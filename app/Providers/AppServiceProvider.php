<?php

namespace App\Providers;

use App\Models\Blog;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        $footercate = Category::latest()->withCount('blogs')->orderBy('blogs_count', 'desc')->take(6)->get();
        View::share('footercate', $footercate);

        $recentfooter = Blog::latest()->with('category','user')->take(2)->get();
        View::share('recentfooter',$recentfooter);


    }
}
