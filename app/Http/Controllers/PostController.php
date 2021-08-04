<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    function index()
    {   
        // dd(Auth::user());
        $posts = Post::all();
        
        return view('posts.index', ['posts' => $posts]);
    }

    function create()
    {
        return view('posts.create');
    }

    function edit($id)

    {
        $post = Post::find($id);
        
        return view('posts.edit',['post'=>$post]);
    }

    function show($id)
    {
        // $post = new Post();
        $post = Post::find($id);
        
        return view('posts.show',['post'=>$post]);

    }

    // ララベルのときは以下のように書く
    function store(Request $request)
    {
        $post = new Post();
        // テーブルに値を代入
        $post ->title = $request -> title;
        $post ->body = $request -> body;
        // ($post->titleカラム名 = $request -> inputタグのname属性名)
        // 左辺：テーブル　右辺：フォームから来たデータ
        $post ->user_id = Auth::id();

        $post -> save();

        return redirect()->route('posts.index');
    }

    function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post ->title = $request -> title;
        $post ->body = $request -> body;

        $post -> save();
        return view('posts.show',['post'=>$post]);
    }

    function destroy($id)
    {
        $post = Post::find($id);

        // if(Auth::id() !== $post->user_id){
        //     return abort(404);
        // }

        $post -> delete();
        return redirect()->route('posts.index');
    }

}