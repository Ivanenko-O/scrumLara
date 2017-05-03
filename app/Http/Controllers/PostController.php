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


class PostController extends \App\Http\Controllers\Controller

{
    public function show()
    {
        $slug = request()->segment(1);
        $post = \TCG\Voyager\Models\Post::where('slug', $slug)->firstorFail();

        return view('pages.posts.show-post', [
            'post' => $post,
        ]);
    }
}

