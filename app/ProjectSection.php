<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectSection extends Model
{
	/**
	 * Fetch all active rows from 'projects_sections' table. Laravel 
	 * will output json by default when the result is returned.
	 * 
	 * @return array
	 */
	public static function getActiveRows() : array
	{
		return self::where('display', 1)->orderBy('featured', 'desc')->orderBy('order', 'asc')->get()->toArray();
	}
}
