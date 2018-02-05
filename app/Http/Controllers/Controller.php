<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use GuzzleHttp\Client;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


	/**
	 * Validate Google Recaptcha response.
	 *
	 * @param string $recaptcha Recaptacha obtained from Axios containing the picture challenge result.
	 * @param string $ip Client `IP` (i.e., the form sender).
	 * @return mixed GuzzleHttp response.
	 */
	protected function validateRecaptcha(string $recaptcha, string $ip)
	{
		$data = array(
			'secret' 	=> env('GOOGLE_RECAPTCHA_SECRET'),
			'response' 	=> $recaptcha,
			'remoteip' 	=> $ip
		);
		$client = new Client();
		$response = $client->request('POST', env('GOOGLE_RECAPTCHA_BASE_URI'), ['form_params' => $data]);
		$response = json_decode($response->getBody()->getContents());

		return $response->success;
	}

}
