<?php

namespace App\Http\Controllers;

use App\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Store the data sent via the contact form on the landing page.
     *
     * @param Request $request
     * @return string
     */
    public function store(Request $request)
    {
        $status = ContactMessage::handleContactMessage([
            'recaptcha' => $request->recaptcha,
            'ip'        => $request->ip(),
            'from'      => $request->from,
            'to'        => $request->to,
            'content'   => $request->input('content') // Because content is a property of Request.
        ]);

        return $status ? 'ok' : 'nok';
    }
}
