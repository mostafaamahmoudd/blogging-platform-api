<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $validated = $request->validated([
            'title' => 'required',
            'content' => 'required|min:10',
        ]);

        Post::create($validated);

        return response()->json([
            200, 'post created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        $this->authorize('update', $post);

        $validated = $request->validated([
            'title' => 'required',
            'content' => 'required|min:10',
        ]);

        $post->update($validated);

        return response()->json([
            200, 'post updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return response()->json([
            200, 'post deleted successfully'
        ]);
    }
}
