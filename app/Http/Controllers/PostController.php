<?php
namespace App\Http\Controllers\Api;
namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Requests\PostDataStoreRequest;
use App\Contracts\Services\Post\PostServiceInterface;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    private $postService;

    public function __construct(PostServiceInterface $postService)
    {
       $this->postService = $postService;
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $posts = $this->postService->index();
        return view('posts.index', compact('posts'));
    }

     /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('posts.create');
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\PostDataStoreRequest $request
    * @return \Illuminate\Http\Response
    */
    public function store(PostDataStoreRequest $request)
    {
        $posts = $this->postService->create($request);
        return redirect()->route('posts.index',compact('posts'))->with('success','Post has been created successfully.');
    }

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

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\PostDataStoreRequest $request
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */
    public function update(UpdatePostRequest $request,Post $post)
    {
        $posts = $this->postService->update($request,$post);
        return redirect()->route('posts.index', compact('posts'))->with('success','Post Has Been updated successfully');
    }

     /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Post $post
    * @return \Illuminate\Http\Response
    */
    public function destroy(Post $post)
    {
        $posts = $this->postService->destroy($post);
        return redirect()->route('posts.index',compact('posts'))->with('success','Post has been deleted successfully');
    }

}
