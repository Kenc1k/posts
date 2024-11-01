<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('post.index' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'text' => 'required|string',
            'image' => 'required|string',
            'like' => 'required|integer',
            'dislike' => 'required|integer',
            'view' => 'required|integer'
        ]);

        Post::create($validated);

        return redirect('/post')->with('success' , 'Post created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit' , compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, $id)
    {
            $validated = $request->validate([
                'category_id' => 'required|integer',
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'text' => 'required|string',
                'image' => 'required|string',
                'like' => 'required|integer',
                'dislike' => 'required|integer',
                'view' => 'required|integer'
            ]);
        
            $post = Post::findOrFail($id);
            $post->update($validated);
        
            return redirect('/post')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/post')->with('success' , 'Post deleted succesfully');
    }
}
