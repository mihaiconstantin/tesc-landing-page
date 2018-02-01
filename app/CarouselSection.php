<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarouselSection extends Model
{
    /**
	 * Fetch all active rows from 'carousel_sections' table. Laravel 
	 * will output json by default when the result is returned.
	 * 
	 * @return array
	 */
	public static function getActiveRows() : array
	{
        return self::where('display', 1)->orderBy('order', 'asc')->get()->toArray();
    }
}
