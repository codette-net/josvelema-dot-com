<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactController
{
    public function show() {
        return view('pages.contact');
    }

    public function submit(Request $request) {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        return back()->with('success', 'Your message has been sent!');
    }
}
