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
}
