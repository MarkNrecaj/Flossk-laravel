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
        // ose $request->validate(array);

        $data = $this->validate($request, [
            'author_id' => 'required|integer',
            'title' => 'required|max:255',
            'description' => 'required|max:200000',
            'slug' => 'required|max:255',
            'published' => 'required|date',

            
        ]);

        // $data = [
        //     'author_id' => $request->input('author_id'),
        //     'title' => $request->input('title'),
        //     'description' => $request->input('description'),
        //     'slug' => $request->input('slug'),
        //     'published' => $request->input('published'),
        // ];
            Post::create($data);

            return back()->with('message', 'Post has been saved!');
    }
}
