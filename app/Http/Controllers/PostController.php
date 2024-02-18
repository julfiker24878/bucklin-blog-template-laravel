<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function add(){
         $categories = Category::all();
         return view('post.add', [
             'categories' => $categories,
         ]);
     }

     public function insert(Request $request)
    {
        $image_id = Post::insertGetId([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'desc' => $request->desc,
            'created_at' => Carbon::now(),
        ]);

        $image = $request->image;
        $extension = $image->getClientOriginalExtension();
        $image_name = $image_id.'.'.$extension;

        Image::make($image)->save(public_path('/uploads/post/'.$image_name));

        Post::find($image_id)->update([
            'image' => $image_name,
        ]);

        return back()->with('success', 'Post published successfully!');

    }

    public function view(){
        $posts = Post::all();
        return view('post.view', [
            'posts' => $posts,
        ]);
    }

    public function edit($post_id)
    {
        $post = Post::find($post_id);
        return view('post.edit', [
            'post' => $post,
        ]);
    }

    public function update(Request $request)
    {
        if($request->image != ''){
            Post::find($request->id)->update([
                'title' => $request->title,
                'desc' => $request->desc,
                'updated_at' => Carbon::now(),
            ]);
    
            $image_path = public_path('/uploads/post/'.Post::find($request->id)->image);
            unlink($image_path);
    
            $image = $request->image;
            $extension = $image->getClientOriginalExtension();
            $image_name = $request->id.'.'.$extension;
    
            Image::make($image)->save(public_path('/uploads/post/'.$image_name));
    
            Post::find($request->id)->update([
                'image' => $image_name,
            ]);
    
            return back()->with('success', 'Update successful!');
        }else{
            Post::find($request->id)->update([
                'title' => $request->title,
                'desc' => $request->desc,
                'updated_at' => Carbon::now(),
            ]);

            return back()->with('success', 'Update successful!');
        }
    }


    public function delete($post_id)
    {
        
        $image_path = public_path('/uploads/post/'.Post::find($post_id)->image);
        unlink($image_path);

        Post::find($post_id)->delete();

        return back()->with('success', 'A post has been removed successfully!');

    }
























}
