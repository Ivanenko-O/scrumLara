<?php
/**
 * Created by IntelliJ IDEA.
 * User: Леся
 * Date: 26.04.2017
 * Time: 17:22
 */
namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;


class PostController extends \App\Http\Controllers\Controller

{
    public function show()
    {
        $slug = request()->segment(1);
        $post = \TCG\Voyager\Models\Post::where('slug', $slug)->first();

        return view('pages.posts.show-post', [
            'post' => $post,
        ]);
    }

    public function showAll()
    {
        $posts = \TCG\Voyager\Models\Post::all();
    }

    public function getCategories()
    {
        $categories = \TCG\Voyager\Models\Category::all();
    }


}

