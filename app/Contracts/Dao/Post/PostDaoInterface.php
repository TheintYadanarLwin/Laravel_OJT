<?php

namespace App\Contracts\Dao\Post;
use App\Models\Post;
use Illuminate\Http\Request;

interface PostDaoInterface
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index();
    
     /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create($request);

    /**
    * Update the specified resource in storage.
    *
    *  @param  \App\Http\Requests\UpdatePostRequest $request
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */
    public function update($request,$post);

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Post $post
    * @return \Illuminate\Http\Response
    */
    public function destroy(Post $post);
}
