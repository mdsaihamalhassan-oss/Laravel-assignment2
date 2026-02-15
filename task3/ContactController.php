<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // লগ ফাইলে ডাটা লিখা
        Log::info('Contact Form Submission:', $data);

        // সেশন success message
        return redirect()
            ->route('contact.confirmation')
            ->with('success', 'Form submitted successfully!')
            ->with('data', $data);
    }

    public function confirmation()
    {
        return view('confirmation');
    }
}