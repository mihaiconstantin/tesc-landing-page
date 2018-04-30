<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	/**
	 * Get the projects (i.e., posts) for a given category.
	 */
	public function posts() {
		return $this->hasMany('App\Post');
	}


	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'parent_id', 'order', 'created_at', 'updated_at'
	];


	/**
	 * Get the id of a category provided a slug.
	 *
	 * @param 	string 	$slug 	The category slug.
	 * @return 	int 			The id associated to the prvided slug.
	 */
	public static function identifySlug($slug) {
		return self::where('slug', $slug)->value('id');
	}

}
