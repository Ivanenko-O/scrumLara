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
        $posts = $posts -> getLimitedAndSortedBy(10, 'Наша жизнь');
        View::share('global_posts', $posts);
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
