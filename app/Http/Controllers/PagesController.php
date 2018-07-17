<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    //

    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        return view('pages.index')->with('posts', $posts);
    }

    public function index2(){
        return view('index');
    }

}
