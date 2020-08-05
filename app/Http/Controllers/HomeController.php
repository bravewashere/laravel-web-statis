<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function register()
    {
        return view('register');
    }
    public function welcome(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $users = $firstname . " " . $lastname;

        return view('welcome', ['users' => $users]);
    }
}
