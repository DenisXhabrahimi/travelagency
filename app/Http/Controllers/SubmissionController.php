<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubmissionController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20|regex:/^\+?\d{10,20}$/',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
        ]);

        // Store the submission in the database
        $submission = Submission::create($request->all());

        // Send the email
        Mail::send([], [], function ($message) use ($submission) {
            $message->to('albaniawonders2024@gmail.com')
                ->subject('New Submission from ' . $submission->name)
                ->html('Name: ' . $submission->name . '<br>' .
                    'Phone Number: ' . $submission->phone_number . '<br>' .
                    'Email: ' . $submission->email . '<br>' .
                    'Message: ' . $submission->message);
            $message->from($submission->email, $submission->name);
        });

        return redirect()->back()->with('success', 'Your request has been submitted.');
    }
}
