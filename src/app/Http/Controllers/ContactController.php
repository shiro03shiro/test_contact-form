<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id')->get(['id', 'content']);
        return view('contact.form', compact('categories'));
    }
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel_1', 'tel_2', 'tel_3', 'address', 'building', 'detail']);

        $contact['name'] = trim($contact['first_name'] . ' ' . $contact['last_name']);
        $tel_parts = array_filter([$contact['tel_1'], $contact['tel_2'], $contact['tel_3']]);
        $contact['tel'] = implode('', $tel_parts);

        $categories = Category::orderBy('id')->get(['id', 'content']);
        return view('contact.confirm', compact('contact', 'categories'));
    }
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel_1', 'tel_2', 'tel_3', 'address', 'building', 'detail']);

        $tel_parts = array_filter([$contact['tel_1'], $contact['tel_2'], $contact['tel_3']]);
        $contact['tel'] = implode('', $tel_parts);

        unset($contact['tel_1'], $contact['tel_2'], $contact['tel_3']);

        Contact::create($contact);
        return view('contact.thanks');
    }
    public function admin()
    {
        return view('admin.dashboard');
    }
}
