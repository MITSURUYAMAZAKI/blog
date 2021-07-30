<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    function index()
    {   
        dd(Auth::user());
        $posts = Post::all();
        
        return view('posts.index', ['posts' => $posts]);
    }

    function create()
    {
        return view('posts.create');
    }

    function edit()
    {
        return view('posts.edit');
    }

    function show()
    {
        return view('posts.show');
    }

    // ララベルのときは以下のように書く
    function store(Request $request)
    {
        $post = new Post();
        // テーブルに値を代入
        $post ->title = $request -> title;
        $post ->body = $request -> body;
        $post ->user_id = 1;

        $post -> save();
        return redirect()->route('posts.index');
        // ($post->titleカラム名 = $request -> inputタグのname属性名)
    }
}