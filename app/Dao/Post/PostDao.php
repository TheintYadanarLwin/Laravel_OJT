<?php

namespace App\Dao\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Contracts\Dao\Post\PostDaoInterface;

class PostDao implements PostDaoInterface
{
    public function getPosts()
    {   
        return Post::latest()->paginate(5);
        
    }

    //Store posts into database
    public function createPosts(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);
        return Post::create($request->post());
    }

    //edit post
    public function updatePosts(Request $request,Post $post)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);
        
        // return $post->fill($request->post())->save();
        return $post->update($request->all());
    }

    //delete Post
    public function deletePost(Post $post)
    {
        return $post->delete();  
    }
}

