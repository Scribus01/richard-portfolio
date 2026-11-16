<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        ContactMessage::create($data);

        try {
            $body = "Name: {$data['name']}\n"
                  . "Email: {$data['email']}\n\n"
                  . $data['message'];

            Mail::raw($body, function ($mail) use ($data) {
                $mail->to('ekpadirichard5@gmail.com')
                     ->replyTo($data['email'], $data['name'])
                     ->subject('New message from your portfolio');
            });
        } catch (\Throwable $e) {
            report($e);
        }

        return back()->with('success', 'Thank you! Your message has been sent.');
    }
}
