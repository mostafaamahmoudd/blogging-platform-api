<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
        $validated = $request->validated([
            'text' => 'required|string|min:3|max:255',
        ]);

        Post::create($validated);

        return response()->json([
            200, 'post created successfully'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommentRequest $request, Comment $comment)
    {
        $this->authorize('update', $comment);

        $validated = $request->validated([
            'text' => 'required|string|min:3|max:255',
        ]);

        $comment->update($validated);

        return response()->json([
            200, 'post updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);

        $comment->delete();

        return response()->json([
            200, 'post deleted successfully'
        ]);
    }
}
