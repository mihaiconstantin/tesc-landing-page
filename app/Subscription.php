<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionValidationSent;

class Subscription extends Model
{
    /**
     * Generate a unique random string that serves as verification for the subscription validation.
     *
     * @return string
     */
    public function generateVerificationToken() : string
    {
        return str_shuffle(hash('sha256', env('APP_NAME'))) . str_random(50);
    }



    /**
     * Send the verification mail and return the status.
     *
     * @param Subscription $subscription
     * @return bool
     */
    public static function sendVerificationMail(Subscription &$subscription) {
        // Send the mail.
        Mail::to($subscription->email)->send(new SubscriptionValidationSent($subscription->token));

        // Return the status for the call to the Mailgun API.
        return (count(Mail::failures()) > 0) ? false : true;
    }



    /**
     * Reactivate a given subscription.
     *
     * @param Subscription $subscription
     */
    public static function reactivateSubscription(Subscription &$subscription) {
        $subscription->active = 1;
        $subscription->save();
    }



    /**
     * Add a new subscription and send it via the Mailgun API.
     *
     * @param $data
     * @return bool|int|mixed
     */
    public static function addSubscription($data)
    {
        // Create a subscription model from the request data.
        $subscription = new Subscription();
	    $subscription->email = $data['email'];
        $subscription->ip = $data['ip'];
        $subscription->token = $subscription->generateVerificationToken();
        $subscription->active = 1;
        $subscription->save();

        return $subscription;
    }



    /**
     * Handle the subscription (i.e., reactivation, addition, send email).
     *
     * @param $data
     * @return bool
     */
    public static function handleSubscription($data)
    {
        // Check if the current subscription exists.
        $subscription = Subscription::where('email', '=', $data['email'])->first();

        // Reactivate the subscription or create a new one.
        if (isset($subscription))
        {
            if ($subscription->verified == 1 || $subscription->active == 1) { return false; }
            self::reactivateSubscription($subscription);
        }
        else
        {
            $subscription = self::addSubscription([
                'email' => $data['email'],
                'ip' => $data['ip']
            ]);
        }

        // Send the mail and return the status (i.e., true or false).
        return Subscription::sendVerificationMail($subscription);
    }
}
