<?php

namespace App\Contracts\Services\Post;

use App\Models\Post;
use Illuminate\Http\Request;

interface PostServiceInterface
{
    /**
     * Display a listing of the resource.
     *  @return object
     */
    public function index();

    /**
     * Create Category into Post Table
     * @return object
     */
    public function getAllCategories();
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest $request
     */
    public function store(Request $request);

    /**
     * Edit the specified resource in storage.
     *
     * @param  \App\Models\Post  $post
     */
    public function edit(Post $post);

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest $request
     * @param  \App\Models\Post  $post
     */
    public function update(Request $request, Post $post);

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post $post
     */
    public function destroy(Post $post);
}
