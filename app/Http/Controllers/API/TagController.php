<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tag::paginate(10);
    }

    public function getPosts(Tag $tag)
    {
        return $tag->posts()->with(['user', 'comments'])->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagRequest $request)
    {
        $this->authorize('create', Tag::class);

        $validated = $request->validate([
            'name' => 'required|min:2|max:255|unique:tags',
        ]);

        Tag::create($validated);

        return response()->json([
            200, 'tag created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return $tag;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $this->authorize('update', $tag);

        $validated = $request->validate([
            'name' => 'required|min:2|max:255',
        ]);

        $tag->update($validated);

        return response()->json([
            200, 'tag updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $this->authorize('delete', $tag);

        $tag->delete();

        return response()->json([
            200, 'tag deleted successfully'
        ]);
    }
}
