<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function first() {
        return view('post.my-first-post');
    }

    public function second() {
        return view('post.my-second-post');
    }

    public function third() {
        return view('post.my-third-post');
    }
}
