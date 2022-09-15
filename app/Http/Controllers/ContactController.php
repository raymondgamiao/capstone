<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Mail\VisitorContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
        return view(
            'contact',
            [
                'branches' => Branch::all(),
                'title' => 'Categories'
            ]
        );
    }
    public function submitContactForm (Request $request)
    {
        $data = [
            'name' => $request ->name,
            'email' =>$request ->email,
            'number' =>$request ->number,
            'message' =>$request->message,
        ];

        Mail::to('abellarbrianjames@gmail.com')->send (new VisitorContact($data));

        Session::flash('message', 'Thank you for your email');
        return redirect()->route('contact.show');

    }
    public function showContactForm()
    {
        return view('pages.contact');
    }

    
}


