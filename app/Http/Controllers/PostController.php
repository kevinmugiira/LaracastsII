<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function show($slug)
    {
        //$post = DB::table('posts')->where('slug', $slug)->first();
        //$post = Post::where('slug', $slug)->firstOrFail();


        return view('post',[
            'post' => Post::where('slug',$slug)->firstOrFail()
        ]);
    }
}
