<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
	/**
	 * Fetch all active rows from 'subscriptions' table. Laravel 
	 * will output json by default when the result is returned.
	 * 
	 * @return array
	 */
	public static function allOrderedByCreationDate()
	{
		return self::orderBy('created_at', 'desc')->get()->toArray();
	}


	/**
	 * Add a new row to the  'subscriptions' table.
	 * 
	 * @param array $data The data passed through the `POST` request.
	 * @return bool The status of the query. 
	 */
	public static function add($data) : bool {
		$subscription = new Subscription();
		$subscription->email = $data['email'];
		$subscription->token = $data['token'];
		$subscription->ip = $data['ip'];
		return $subscription->save();
	}
}
