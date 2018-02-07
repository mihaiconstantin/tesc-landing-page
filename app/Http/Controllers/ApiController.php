<?php

namespace App\Http\Controllers;

use App\CarouselSection;
use App\AboutSection;
use App\PeopleSection;
use App\ProjectSection;
use App\ContactMessage;
use App\Subscription;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class ApiController extends Controller
{
	/**
	 * Fetch the data for all sections at once.
	 *
	 * @return Response
	 */
	public function landingPage()
	{
		try {
			$siteSettingsVoyager = array(
				'navbar_logo' 		=> setting('site.navbar_logo'),
				'footer_logo' 		=> setting('site.footer_logo'),
				'terms_conditions' 	=> setting('site.terms_conditions')
			);
		} catch (Exception $e) {
			$siteSettingsVoyager = $e->getMessage();
		}

		return array(
			'sectionCarousel' 		=> CarouselSection::getActiveRows(),
			'sectionAbout' 			=> AboutSection::getActiveRows(),
			'sectionPeople' 		=> PeopleSection::getActiveRows(),
			'sectionProject' 		=> ProjectSection::getActiveRows(),
			'siteSettingsVoyager'	=> $siteSettingsVoyager
		);
	}


	/**
	 * Store the data sent via the contact form on the landing page.
	 *
	 * @return Response
	 */
	public function storeMessage(Request $request)
	{
		// Performing Recaptach validation before everything else.
		$recaptchaStatus = $this->validateRecaptcha($request->input('recaptcha'), $request->ip());
		if (!$recaptchaStatus) { return 'robot'; }

		// Prepare the data.
		$recipients = PeopleSection::getByName($request->input('to'));

		$data = array(
			'from' 		=> $request->input('from'),
			'to' 		=> $request->input('to'),
			'inbox'		=> $recipients['inbox'],
			'cc'		=> $recipients['cc'],
			'content' 	=> $request->input('content'),
			'sent'		=> 0
		);

		// TODO: Send email here... When done update the `sent` value.

		// Store the message in the database.
		$status = ContactMessage::add($data);

		// Return a response back to Axios.
		return $status ? 'ok' : 'nok';
	}


	/**
	 * Store the data sent via the subscription form on the landing page.
	 *
	 * @return Response
	 */
	public function storeSubscription(Request $request)
	{
		// Prepare the data.
		$data = array(
			'email' => $request->email,
			'token' => str_random(50),
			'ip' => $request->ip()
		);

		// Create subscription.
		$status = Subscription::add($data);

		// Send the verification email.
		// ...

		// Return a response back to Axios.
		return $status ? 'ok' : 'nok';
	}
}
