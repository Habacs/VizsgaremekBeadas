<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('segitsvelem@gmail.com')->send(new ContactMessage(
            $request->name,
            $request->email,
            $request->message
        ));

        return response()->json(['message' => 'Üzenet elküldve.']);
    }
}
