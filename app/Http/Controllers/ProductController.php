<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $fruits = ['Manga', 'Laranja', 'Banana', 'Maça', 'Açai'];
        return view('welcome', compact('fruits'));
    }
}
