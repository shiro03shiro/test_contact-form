<?php

namespace App\Http\Controllers;
use App\Models\ContactUser;
use Illuminate\Http\Request;

class ContactUserController extends Controller
{
    public function index()
    {
        $contact_users = ContactUser::all();
        return view('index', ['contact_users' => $contact_users]);
    }
}
