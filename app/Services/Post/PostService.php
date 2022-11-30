<?php

namespace App\Services\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Contracts\Dao\Post\PostDaoInterface;
use App\Contracts\Services\Post\PostServiceInterface;

class PostService implements PostServiceInterface
{
    private $postDao;

    public function __construct(PostDaoInterface $postDao)
    {
        $this->postDao = $postDao;
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return $this->postDao->index();
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(Request $request)
    {
        return $this->postDao->create($request);
    }

    /**
    * Update the specified resource in storage.
    *
    *  @param  \App\Http\Requests\UpdatePostRequest $request
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request,Post $post)
    {
        return $this->postDao->update($request,$post);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Post $post
    * @return \Illuminate\Http\Response
    */
    public function destroy(Post $post)
    {
        return $this->postDao->destroy($post);
    }
}
