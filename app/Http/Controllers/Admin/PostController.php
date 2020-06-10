<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function all_posts(){

        // $posts = Post::with('user')->get();
        // $posts = Post::with('category')->get();
        // $posts = Post::all();
        $category = Category::with('posts')->get();
        return $category;

        // return $posts;
    }
}
