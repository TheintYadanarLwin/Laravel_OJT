<?php

namespace App\Contracts\Dao\Post;

use App\Models\Post;

interface PostDaoInterface
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index();

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostDataStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store($request);

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update($request, $post);

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post);
}
