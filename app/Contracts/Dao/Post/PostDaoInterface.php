<?php

namespace App\Contracts\Dao\Post;

use App\Models\Post;

interface PostDaoInterface
{
    /**
     * Display a listing of the resource.
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
    public function store($request);

     /**
     * Edit the specified resource in storage.
     *
     * @param  \App\Models\Post  $post
     */
    public function edit( $post);
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest $request
     * @param  \App\Models\Post  $post
     */
    public function update($request, $post);

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post $post
     */
    public function destroy(Post $post);
}
