<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {

        $userID = auth()->id();
        $posts = Post::where('userID', $userID)->get();
        return view('posts.index', compact('posts'));
    }

    public function calendar(){
        return view('posts.calendar');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store()
    {

        $this->validate(request(), [

            'title' => 'required|min:3',
            'body' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'userID' => auth()->id(),
            'completed' => false
        ]);

        return redirect('/');

    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post){
        $post -> body = request('body');
        $post -> completed = request('completed');
        $post ->save();
        return redirect('/');
    }

    public function delete(Post $post){
        $post -> delete();
        return redirect('/');
    }


}
