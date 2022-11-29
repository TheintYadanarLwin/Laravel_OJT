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

    public function getPosts()
    {
        return $this->postDao->getPosts();
    }

    public function createPosts(Request $request)
    {
        return $this->postDao->createPosts($request);
    }

    public function updatePosts(Request $request,Post $post)
    {
        return $this->postDao->updatePosts($request,$post);
    }

    public function deletePost(Post $post)
    {
        return $this->postDao->deletePost($post);
    }
    
}