<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{

    /**
     * Store the data sent via the subscription form on the landing page.
     *
     * @param Request $request
     * @return string
     */
    public function store(Request $request)
    {
        // Add or reactivates the subscription accordingly and sends a verification mail
        $status = Subscription::handleSubscription([
           'email' => $request->email,
           'ip' => NULL
        ]);

        return $status ? 'ok' : 'nok';
    }



    /**
     * Subscribe an email to the newsletter based on the associated unique token.
     *
     * @param $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function subscribe($token)
    {
        // Fetch the subscription associated with this token.
        $subscription = Subscription::where('token', '=', $token)->firstOrFail();

        // Verify that the subscription is not verified already.
        if ($subscription->verified == 1 || $subscription->active == 0) {
            return view('subscription', ['action' => 'stop']);
        }

        // Set verify the subscription.
        $subscription->verified = 1;
        $subscription->save();


        // Return the view with a confirmation message.
        return view('subscription', ['action' => 'subscribe']);
    }



    /**
     * Unsubscribe an email from the newsletter based on the associated unique token.
     *
     * @param $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function unsubscribe($token)
    {
        // Fetch the subscription associated with this token.
        $subscription = Subscription::where('token', '=', $token)->firstOrFail();

        // Verify that the subscription is not verified already.
        if ($subscription->verified == 0) {
            return view('subscription', ['action' => 'stop']);
        }

        // Set verify the subscription.
        $subscription->verified = 0;
        $subscription->active = 0;
        $subscription->save();


        // Return the view with a confirmation message.
        return view('subscription', ['action' => 'unsubscribe']);
    }

}
