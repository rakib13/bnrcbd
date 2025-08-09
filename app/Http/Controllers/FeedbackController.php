<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function send(Request $request)
    {
        if ($request->has('anonymous_check')) {
            $request->validate([
                'anonymous_feedback' => 'required|string',
                'anonymous_file' => 'nullable|file|max:2048',
                'agree_terms' => 'accepted',
            ]);
        } elseif ($request->has('recognized_check')) {
            $request->validate([
                'recognized_feedback' => 'required|string',
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'mobile' => 'required|string|max:20',
                'recognized_file' => 'nullable|file|max:2048',
                'agree_terms' => 'accepted',
            ]);
        } else {
            return back()->withErrors(['error' => 'Please select a submission type.']);
        }

        // Send mail with form data
        Mail::to('your-email@example.com')->send(new FeedbackMail($request->all()));

        return back()->with('success', 'Thank you! Your feedback has been sent.');
    }
}
