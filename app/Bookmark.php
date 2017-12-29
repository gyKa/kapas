<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bookmarks';

    /**
     * The tags that belong to the bookmark.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
