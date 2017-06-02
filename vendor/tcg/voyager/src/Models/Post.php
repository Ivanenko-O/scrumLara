<?php

namespace TCG\Voyager\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

class Post extends Model
{
    use Translatable;

    protected $translatable = ['title', 'seo_title', 'excerpt', 'body', 'slug', 'meta_description', 'meta_keywords'];
//    protected $translatable = ['title',  'body', 'slug'];

    const PUBLISHED = 'PUBLISHED';

    protected $guarded = [];

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && Auth::user()) {
            $this->author_id = Auth::user()->id;
        }

        parent::save();
    }

    public function authorId()
    {
        return $this->belongsTo(Voyager::modelClass('User'), 'author_id', 'id', 'name');
    }

    /**
     * Scope a query to only published scopes.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished(Builder $query)
    {
        return $query->where('status', '=', static::PUBLISHED);
    }

    /**
     * Scope a query to only published posts.
     *
     * @param string $category
     *
     * @return array
     */

    public function getAllPublished()
    {
        return Post::where('status', 'PUBLISHED');
    }

    public function getByCategory($category)
    {
//        $this -> category = $category;
        return $this -> getAllPublished()
            -> with(['category' => function($query) use ($category) {
                $query -> where('id', $category);
            }]) ;
    }

    public function getLimitedAndSortedBy($limit, $category)
    {
        return $this -> getByCategory($category)
            -> orderBy('created_at', 'exerpt') -> take($limit) -> get();
    }



    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(Voyager::modelClass('Category'), 'id', 'category_id', 'name');
    }



}


