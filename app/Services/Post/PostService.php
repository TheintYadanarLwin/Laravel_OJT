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
     * @return object
     */
    public function index()
    {
        return $this->postDao->index();
    }

    /**
     * Create Category into Post Table
     * @return object
     */
    public function getAllCategories()
    {
        return $this->postDao->getAllCategories();
    }

    /**
     * Edit Data into Post Table
     */
    public function edit(Post $post)
    {
        return $this->postDao->edit($post);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->postDao->store($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        return $this->postDao->update($request, $post);
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
