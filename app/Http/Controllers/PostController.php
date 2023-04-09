<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $payload = $request->toArray();
        $payload["user_id"] = auth()->id();
        $post = Post::query()->create($payload);
        return response()->json([
            "status" => "create post ".$post->id." done",
            "post" => $post
        ]);
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
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        if (auth()->id() != $post->user_id && auth()->user()->is_admin == 0) {
            return response()->json(['error' => '403 Forbidden'], 403);
        }
        $post->update($request->all());
        return response()->json([
            'status' => 'update success',
            'post' => Post::query()->findOrFail($post->id)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if (auth()->id() != $post->user_id && auth()->user()->is_admin == 0) {
            return response()->json(['error' => '403 Forbidden'], 403);
        }
        $post->delete();
        return response()->json(['status' => 'delete success']);

    }
}
