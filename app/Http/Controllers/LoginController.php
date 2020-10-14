<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        /*$post = $request->all();
        var_dump($post);
        */
        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);
        $email = $request->input('email');
        $pass = $request->input('password');
        return "Form Submited" . $email . "***" . $pass;
    }
}
