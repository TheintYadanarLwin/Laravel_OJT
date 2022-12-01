<?php

namespace App\Dao\Post;

use App\Models\Post;
use App\Contracts\Dao\Post\PostDaoInterface;

class PostDao implements PostDaoInterface
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::latest()->paginate(5);
    }

    /**
     * Show the form for creating a new resource.
     * @param  \App\Http\Requests\PostDataStoreRequest $request
     */
    public function store($request)
    {
        return $post = Post::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest $request
     * @param  \App\Models\Post  $post
     */

    public function update($request, $post)
    {
        return $post->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post $post
     */
    public function destroy(Post $post)
    {
        return $post->delete();
    }
}
