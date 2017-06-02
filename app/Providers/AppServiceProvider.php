<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use \TCG\Voyager\Models\Post as Post;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot(Post $posts)
    {
        $g_posts_category_1 = $posts -> getLimitedAndSortedBy(10, 1);
        dd($posts -> getLimitedAndSortedBy(10, 1));

        View::share('g_posts_category_1', $g_posts_category_1);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
