<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo '<h1>Fluente</h1>';
        $slice = Str::of('Welcome to my You Tube')->after('Welcome to');
        echo $slice . '<br>';
        $slice1 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice1 . '<br>';
        $hello = Str::of('Hello')->append('World');
        echo $hello . '<br>';
        $lower = Str::of('LARAVEL 8')->lower();
        echo $lower . '<br>';
        $replace = Str::of('LARAVEL 7')->replace('7', '8.0');
        echo $replace . '<br>';
        $converted = Str::of('titulo laravel')->title();
        echo $converted . '<br>';
        $slug = Str::of('titulo laravel slug')->slug();
        echo $slug . '<br>';
        $str = Str::of('titulo laravel slug')->substr(8, 5);
        echo $str . '<br>';
        $trim = Str::of("/LARAVEL 8/")->trim("/");
        echo $trim . '<br>';
        $upper = Str::of("laravel 8")->upper();
        echo $upper . '<br>';
    }
}
