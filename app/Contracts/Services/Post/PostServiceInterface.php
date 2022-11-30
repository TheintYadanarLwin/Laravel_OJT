<?php

namespace App\Contracts\Services\Post;

use App\Models\Post;
use Illuminate\Http\Request;

interface PostServiceInterface
{
    public function getPosts();
 
       /**
     * Create Post.
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

     /**
    * Delete Post.
    * @param object $request
    * @return object
    */
    public function deletePost(Post $post);
}
