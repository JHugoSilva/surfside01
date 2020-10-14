<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request)
    {
        if ($request->session()->has('name')) {
            echo $request->session()->get('name');
        } else {
            echo "No data in the session";
        }
    }

    public function storeSessionData(Request $request)
    {
        $request->session()->put('name', 'hugo');
        echo "SESSION START";
    }

    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('name');
        echo "SESSION REMOVE";
    }
}
