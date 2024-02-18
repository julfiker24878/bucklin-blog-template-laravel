<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FrontendController extends Controller
{
    public function index(){
        $trending_posts = Post::where('category_id', 9)->get();
        $mockup_posts = Post::where('category_id', 3)->take(1)->orderBy('id', 'DESC')->get();
        $graphic_posts = Post::where('category_id', 2)->take(4)->orderBy('id', 'DESC')->get();
        $popular_posts = Post::where('category_id', 9)->take(4)->orderBy('id', 'ASC')->get();
        $slider_posts = Post::where('category_id', 5)->take(3)->orderBy('id', 'DESC')->get();
        $latest_posts = Post::where('category_id', 8)->take(4)->orderBy('id', 'DESC')->get();
        return view('index', [
            'trending_posts' => $trending_posts,
            'mockup_posts' => $mockup_posts,
            'graphic_posts' => $graphic_posts,
            'popular_posts' => $popular_posts,
            'slider_posts' => $slider_posts,
            'latest_posts' => $latest_posts,
        ]);
    }

    public function single_post($single_post){
        $post = Post::find($single_post);
        $popular_posts = Post::where('category_id', 9)->take(4)->orderBy('id', 'ASC')->get();
        return view('single', [
            'post' => $post,
            'popular_posts' => $popular_posts,
        ]);
    }
}
