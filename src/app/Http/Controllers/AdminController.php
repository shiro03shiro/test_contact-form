<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.admin-test', ['contacts' => $contacts]);
    }
}
