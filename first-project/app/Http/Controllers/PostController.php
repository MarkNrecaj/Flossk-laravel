<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function index() {
        // dd('here');
        return view('posts');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $data = [
            'author_id' => $request->input('author_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'published' => $request->input('published'),
        ];
        dd(Post::create($data));
    }
}
