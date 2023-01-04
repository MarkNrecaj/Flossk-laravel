<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Post;

class PostController extends Controller
{
    function index() {
        $posts = Post::paginate(5);
        // dd($posts);
        return view('posts.index', ['posts' => $posts]);
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

    public function edit(Post $post)
    {
        $post['published'] = Carbon::parse($post['published'])->format('Y-m-d');
        
        return view('posts.edit', ['post' => $post]);

    }

    public function update(Request $request,Post $post)
    {
        $data = $this->validate($request, [
            'author_id' => 'required|integer',
            'title' => 'required|max:255',
            'description' => 'required|max:200000',
            'slug' => 'required|max:255',
            'published' => 'required|date',
        ]);

        $post->update($data);
        return back()->with("message", "Post has been updated");
    }
}
