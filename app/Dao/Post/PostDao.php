<?php

namespace App\Dao\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Contracts\Dao\Post\PostDaoInterface;

class PostDao implements PostDaoInterface
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {   
        return Post::latest()->paginate(5);
        
    }

    /**
    * Show the form for creating a new resource.
    * @param  \App\Http\Requests\PostDataStoreRequest $request
    * @return \Illuminate\Http\Response
    */
    public function create($request)
    {

        $post = Post::create($request);
      
        return back()->with('success', 'Post has been created successfully.');
        // $validatedData = $request->validate([
        //     'title' => 'required',
        //     'description' => 'required|max:50',
        //     'status' => 'required'
        // ], [
        //     'title.required' => 'Post Title is Required!',
        //     'description.required' => 'Post Description is required.',
        //     'status.required' => 'Post Status is required.',
        // ]);

        // $post = Post::create($validatedData);
      
        // return back()->with('success', 'Post has been created successfully.');
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdatePostRequest $request
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */

    public function update($request,$post)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //     'status' => 'required',
        // ]);
        
        return $post->update($request->all());
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Post $post
    * @return \Illuminate\Http\Response
    */
    public function destroy(Post $post)
    {
        return $post->delete();  
    }
}

