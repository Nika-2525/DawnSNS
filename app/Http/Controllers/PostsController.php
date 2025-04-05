<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create(Request $request)
    {
        $post = $request->input('newPost');
        $user_id = Auth::id();
        DB::table('posts')->insert([
            'user_id' => $user_id,
            'post' => $post,
            'created_at' => now(),
        ]);
        return redirect('/index');
    }

    public function search()
    {

    }
}
