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

        $g_posts_cat_1 = $posts -> getLimitedAndSortedBy(4, 1);
        $g_posts_cat_2 = $posts -> getLimitedAndSortedBy(7, 2);

        $shared_data = [
            'g_posts_cat_1' => $g_posts_cat_1,
            'g_posts_cat_2'=> $g_posts_cat_2
        ];

        View::share($shared_data);
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
