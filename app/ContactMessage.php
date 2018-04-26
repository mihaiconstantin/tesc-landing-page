<?php

namespace App;

use App\Mail\ContactMessageSent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;


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
	 * Add a new row to the  'contact_sections' table and
     * send the email via the Mailgun api.
	 *
	 * @param array $data The data passed through the `POST` request.
	 * @return bool The status of the query.
	 */
	public static function addAndSend($data) : bool {
		$message = new ContactMessage();
		$message->from 		= $data['from'];
		$message->to 		= $data['to'];
		$message->inbox 	= $data['inbox'];
		$message->content 	= $data['content'];
        $message->save();

		// Send the message to the parties involved.
        Mail::to($message->inbox)->send(new ContactMessageSent($message));

        // Check if the mail has failed.
        $hasFailures = count(Mail::failures()) > 0;

        // If sending succeeded update the message row and inform Axios.
        if ($hasFailures) {
            return false;
        } else {
            $message->sent = 1;
            $message->save();
            return true;
        }
	}
}
