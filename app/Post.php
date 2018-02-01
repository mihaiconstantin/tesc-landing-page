<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
	/**
	 * Get the user (i.e., author) that owns a given post (i.e., project).
	 */
	public function user()
	{
		return $this->belongsTo('App\User', 'author_id');
	}


    /**
     * Get the category that a given post (i.e., project) belongs to.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
