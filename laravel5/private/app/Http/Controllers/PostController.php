<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class PostController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        
        return view('pages.create', compact('categories'));
    }

    public function daftar()
    {
        Post::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password')
        ]);
    }
}
