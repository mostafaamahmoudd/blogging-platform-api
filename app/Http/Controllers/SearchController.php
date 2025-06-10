<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $validated = $request->validate([
            'query' => 'required|min:3|string',
        ]);

        return Post::where('title', 'LIKE', '%' . $validated['query'] . '%')
            ->orWhere('content', 'LIKE', '%' . $validated['query'] . '%')
            ->with(['user', 'tags'])
            ->paginate(10);
    }
}
