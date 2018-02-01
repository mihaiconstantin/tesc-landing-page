<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeopleSection extends Model
{
	/**
	 * Fetch all active rows from 'people_sections' table. Laravel 
	 * will output json by default when the result is returned.
	 * 
	 * @return array
	 */
	public static function getActiveRows() : array
	{
		return self::where('display', 1)->orderBy('order', 'asc')->get()->toArray();
	}


	/**
	 * Find a person by name. Laravel will output json 
	 * by default when the result is returned.
	 * 
	 * @param string $name The name of the person to find.
	 * @return array
	 */	
	public static function getByName($name) : array 
	{
		$person = self::where('name', '=', $name)->first();

		if(is_null($person)) 
		{
			$inbox = self::where('name', '=', 'First Founder')->first()->email;
			$cc = self::where('name', '=', 'Second Founder')->first()->email;
		} 
		else 
		{
			$inbox = $person->email;

			if ($person->name == 'First Founder') 
			{
				$cc = self::where('name', '=', 'Second Founder')->first()->email;
			}
			else 
			{
				$cc = self::where('name', '=', 'First Founder')->first()->email;
			}
		}

		return array(
			'inbox' => $inbox,
			'cc' => $cc
		);
	}
}
