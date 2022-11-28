<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function index()
    {
        // $posts = DB::table('posts')->select('id','title','description','status')->get();

        // return view('post')->with('posts', $posts);
    }
}
