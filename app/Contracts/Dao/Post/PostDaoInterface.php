<?php

namespace App\Contracts\Dao\Post;
use App\Models\Post;
use Illuminate\Http\Request;

interface PostDaoInterface
{
    public function getPosts();
    
    /**
     * Create Post.
     *
     * Find Product by searchbox's input
     * @param [object]    $request
     *
     * @return object
     */
    public function createPosts(Request $request);

    /**
     * Update Post.
     * @param [object]    $request
     *
     * @return object
     */

    public function updatePosts(Request $request,Post $post);

    public function deletePost(Post $post);
}