<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function getAllPostId($id)
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $response->json();
    }

    public function addPost()
    {
        $response = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => 'New Post Title',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos neque ab iure officiis beatae, at sequi magni ipsam? Necessitatibus dolore sit maxime! Sint blanditiis magni sit placeat omnis provident necessitatibus?'
        ]);
        return $response->json();
    }

    public function updatePost()
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => 'New Post Title 1',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos neque ab iure officiis beatae, at sequi magni ipsam? Necessitatibus dolore sit maxime! Sint blanditiis magni sit placeat omnis provident necessitatibus!'
        ]);
        return $response->json();
    }

    public function deletePost($id)
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts' . $id);
        return $response->json();
    }
}
