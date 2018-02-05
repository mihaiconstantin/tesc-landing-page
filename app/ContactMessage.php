<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
	/**
	 * Fetch all active rows from 'contact_sections' table. Laravel
	 * will output json by default when the result is returned.
	 *
	 * @return array
	 */
	public static function allOrderedBySentDate()
	{
		return self::orderBy('sent_at', 'desc')->get()->toArray();
	}


	/**
	 * Add a new row to the  'contact_sections' table.
	 *
	 * @param array $data The data passed through the `POST` request.
	 * @return bool The status of the query.
	 */
	public static function add($data) : bool {
		$message = new ContactMessage();
		$message->from 		= $data['from'];
		$message->to 		= $data['to'];
		$message->inbox 	= $data['inbox'];
		$message->cc 		= $data['cc'];
		$message->content 	= $data['content'];
		$message->sent 		= $data['sent'];
		return $message->save();
	}

}
