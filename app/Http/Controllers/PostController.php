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
use Intervention\Image\Image;

class PostController extends \App\Http\Controllers\Controller
{

    public function show($slug) {

        $post = Post::where('slug', $slug)->first();


        $prev = Post::where('id', '<', $post->id )->max('slug');
        $next = Post::where('id', '>', $post->id )->min('slug');

        return view('pages.posts.show-post', [
            'post' => $post,
        ])->with('prev', $prev)->with('next', $next);
    }

    public function showAll() {
        $posts = Post::orderBy('created_at', 'exerpt')->paginate(7);

        return view('pages.blog.blog')->withPosts($posts);
    }

}

