<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.form');
    }
    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel_1', 'tel_2', 'tel_3', 'address_1', 'address_2', 'inquiry_type', 'content']);
        $contact['name'] = trim($contact['last_name'] . ' ' . $contact['first_name']);
        $tel_parts = array_filter([$contact['tel_1'], $contact['tel_2'], $contact['tel_3']]);
        $contact['tel'] = implode('', $tel_parts);
        return view('contact.confirm', compact('contact'));
    }
    public function store(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel_1', 'tel_2', 'tel_3', 'address_1', 'address_2', 'inquiry_type', 'content']);
        Contact::create($contact);
        return view('contact.thanks');
    }
}
