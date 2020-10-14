<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        //return $request->method();
        //return $request->path();
        //return $request->url();
        return $request->fullUrl();
    }
    /*public function index()
    {

        $data = [
            'name' => 'Hugo',
            'email' => 'hugo@email.com',
            'phone' => '84 986224066'
        ];
        $fruits = [];
        return view('user', compact('data', 'fruits'));
    }*/
}
