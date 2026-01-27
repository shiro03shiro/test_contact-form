<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.form');
    }
    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address_1', 'address_2', 'inquiry_type', 'content']);
        return view('contact.confirm', compact('contact'));
    }
    public function store(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address_1', 'address_2', 'inquiry_type', 'content']);
        Contact::create($contact);
        return view('contact.thanks');
    }
}
