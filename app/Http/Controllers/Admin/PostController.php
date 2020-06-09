<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function all_posts(){
//        $posts = Post::all();
//        $category = Post::with('category')->get();
        $user = Post::with('user')->get();
        return $user;
    }
}
