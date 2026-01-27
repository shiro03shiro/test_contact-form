<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
// 仮入力
public function index()
    {
        $contact_users = ContactUser::all();
        return view('index', ['contact_users' => $contact_users]);
    }
}
