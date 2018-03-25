<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
     * Get Carbon formatted creation date of a post.
     * This is automatically called by Eloquent when a model is retrieved (i.e., mutator).
     *
     * @param  string  $value The timestamp stored in the database indicating the creation date.
     * @return array
     */
    public function getCreatedAtAttribute($value)
    {
      	return array(
      		'timestamp' => $value,
      		'formated' => Carbon::createFromTimeStamp(strtotime($value))->diffForHumans()
      	);
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
        ['slug', '<>', $slug]
      ])
      ->inRandomOrder()
      ->first();
   		
      return $post;
   	}


   	/**
   	 * Fetch all the posts filtered by some fields.
   	 *
   	 * @param  string  $status 		The status of the post: PUBLISHED, DRAFT, PENDING.
   	 * @param  string  $order 		The sort direction applied on the `created_at` column.
   	 * @param  int 	   $categoryId 	The id of the category to select the next post from.
   	 * @param  int 	   $howMany 	The number of posts to select.
     * @return mixed 
   	 */
   	public static function getFiltered(string $status = 'PUBLISHED', string $order = 'desc', int $categoryId = null, int $howMany = null) 
    {
      // Building the condition array for where clause.
      $conditions = array(
        ['status', '=', $status]
      );

      if (isset($categoryId)) 
      {
        $conditions[] = ['category_id', '=', $categoryId];
      }

      // Start building the query.
      $query = self::where($conditions)->orderBy('created_at', $order);

      // Decide how many posts to take.
      if (isset($howMany)) 
      {
        $query = $query->take($howMany);
      }

      // Execute the query.
      return $query->with(['User', 'Category'])->get();
    }

}
