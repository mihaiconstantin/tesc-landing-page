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


   	/**
   	 * Fetch the next post (i.e., by creation date) from a specified
   	 * category, and excluding a specifed slug.
	 *
	 * @param  int  $categoryId The id of the category to select the next post from.
	 * @param  string  $slug The slug of the post to be excluded.
     * @return mixed 
   	 */
    public static function pickNext(int $categoryId, string $slug) 
    {
		$post = self::where([
				['category_id', '=', $categoryId],
				['slug', '!=', $slug]
			])
			->orderBy('created_at', 'desc')
			->first();

		return $post;
    }
}
