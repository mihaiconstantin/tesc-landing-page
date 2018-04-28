<?php

namespace App;

use App\Mail\ContactMessageSent;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Client;


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
     * Determine the contact person to send the email to.
     *
     * @return string
     */
    public function determineContactPerson()
    {
        return setting('site.contact_person') !== NULL ? setting('site.contact_person') : env('FALLBACK_CONTACT_PERSON');
    }



    /**
     * Validate the recaptcha from the client interface.
     *
     * @param Client $client
     * @param $recaptcha
     * @param $ip
     * @return bool
     */
    public static function validateRecaptcha(Client $client, $recaptcha, $ip)
    {
        $data = array(
            'secret' 	=> env('GOOGLE_RECAPTCHA_SECRET'),
            'response' 	=> $recaptcha,
            'remoteip' 	=> $ip
        );

        try
        {
            $response = $client->request('POST', env('GOOGLE_RECAPTCHA_BASE_URI'), ['form_params' => $data]);
            $response = json_decode($response->getBody()->getContents());
            return $response->success;
        }
        catch (GuzzleException $e)
        {
            return false;
        }
    }



    /**
     * Create and store a contact message from ann array of data.
     *
     * @param $data
     * @return ContactMessage
     */
    public static function addContactMessage($data)
    {
        $message = new ContactMessage();
        $message->from 		= $data['from'];
        $message->to 		= $data['to'];
        $message->content 	= $data['content'];
        $message->inbox 	= $message->determineContactPerson();
        $message->save();

        return $message;
    }



    /**
     * Send a mail based on a contact message.
     *
     * @param ContactMessage $contactMessage
     * @return bool
     */
    public static function sendMessage(ContactMessage &$contactMessage)
    {
        // Send the mail.
        Mail::to($contactMessage->inbox)->send(new ContactMessageSent($contactMessage));

        // Return the status for the call to the Mailgun API.
        return (count(Mail::failures()) > 0) ? false: true;
    }



    /**
     * Handle the contact message (i.e., validation, addition, send mail).
     *
     * @param $data
     * @return bool|string
     */
    public static function handleContactMessage($data)
    {
        // Validate the recaptcha.
        $isHuman = self::validateRecaptcha(new Client, $data['recaptcha'], $data['ip']);

        // Is this request coming from a human?
        if (!$isHuman) { return 'robot'; }

        // Add the contact message.
        $contactMessage = self::addContactMessage([
            'from' => $data['from'],
            'to' => $data['to'],
            'content' => $data['content']
        ]);

        // Send the mail and return the status (i.e., true or false).
        $status = self::sendMessage($contactMessage);

        // If the mail failed return false.
        if ($status)
        {
            $contactMessage->sent = 1;
            $contactMessage->save();
            return true;
        }
        else
        {
            return false;
        }
    }

}
