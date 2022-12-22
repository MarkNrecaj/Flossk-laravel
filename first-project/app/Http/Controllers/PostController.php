<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function index() {
        $posts =Post::get();
        // dd($posts);
        return view('posts', ['posts' => $posts]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // ose $request->validate(array);

        $data = $this->validate($request, [
            'author_id' => 'required|integer',
            'title' => 'required|max:255',
            'description' => 'required|max:200000',
            'slug' => 'required|max:255',
            'published' => 'required|date',

            
        ]);
            Post::create($data);

            return back()->with('message', 'Post has been saved!');
    }
}
