<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id')->get(['id', 'content']);
        return view('contact.form', compact('categories'));
    }
    public function confirm(Request $request)
    {
        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel_1', 'tel_2', 'tel_3', 'address', 'building', 'detail']);

        $contact['name'] = trim($contact['last_name'] . ' ' . $contact['first_name']);
        $tel_parts = array_filter([$contact['tel_1'], $contact['tel_2'], $contact['tel_3']]);
        $contact['tel'] = implode('', $tel_parts);

        $categories = Category::orderBy('id')->get(['id', 'content']);
        return view('contact.confirm', compact('contact'));
    }
    public function store(Request $request)
    {
        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel_1', 'tel_2', 'tel_3', 'address', 'building', 'detail']);

        $tel_parts = array_filter([$contact['tel_1'], $contact['tel_2'], $contact['tel_3']]);
        $contact['tel'] = implode('', $tel_parts);

        unset($contact['tel_1'], $contact['tel_2'], $contact['tel_3']);

        Contact::create($contact);
        return view('contact.thanks');
    }
}
