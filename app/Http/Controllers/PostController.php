<?php
namespace App\Http\Controllers\Api;
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Contracts\Services\Post\PostServiceInterface;

class PostController extends Controller
{
    private $postService;

    public function __construct(PostServiceInterface $postService)
    {
       $this->postService = $postService;
    }

    //get all posts from database
    public function index()
    {
        $posts = $this->postService->getPosts();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }
    
    //Store posts into database
    public function store(Request $request)
    {
        $posts = $this->postService->createPosts($request);
        return redirect()->route('posts.index',compact('posts'))->with('success','Post has been created successfully.');
    }

    //update posts
    
    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

     /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    
    public function update(Request $request,Post $post)
    {
        $posts = $this->postService->updatePosts($request,$post);
        return redirect()->route('posts.index', compact('posts'))->with('success','Post Has Been updated successfully');
    }

    //delete post
     /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Post $post
    * @return \Illuminate\Http\Response
    */
    public function destroy(Post $post)
    {
        $posts = $this->postService->deletePost($post);
        return redirect()->route('posts.index',compact('posts'))->with('success','Post has been deleted successfully');
    }

}
