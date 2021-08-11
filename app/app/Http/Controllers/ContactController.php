<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMe;
use Exception;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display the contact form
     *
     * @return \Illuminate\Http\Response
     */
    public function contactShow()
    {
        return view('contact.contact');
    }


    /**
     * Perform the contact form submit
     *
     * @param   array   $request    Content of contact form
     * @return  \Illuminate\Http\Response
     */
    public function contactPost(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        try {
            Log::notice('Try to send email from contact form. [Name: ' . $validated['name'] . '; Subject: ' . $validated['subject'] . '; Email: ' . $validated['email'] . ';]');
            Mail::to(env('MAIL_CONTACT_TO', null))->send(
                new ContactMe(
                    $validated['name'],
                    $validated['subject'],
                    $validated['email'],
                    $validated['message']
                )
            );
        } catch (Exception $e) {
            Log::error($e);
            return back()->with('error', __('contactme.contactme_ko'));
        }

        Log::notice('Email from contact form sent successfully.');
        return back()->with('success', __('contactme.contactme_ok'));
    }
}
