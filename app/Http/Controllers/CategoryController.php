<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CategoryController extends Controller
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
         return view('category.add');
     }

     public function insert(Request $request){
         Category::insert([
             'name' => $request->name,
             'created_at' => Carbon::now(),
         ]);

         return back()->with('success', 'Category added successfully!');
     }

     public function view(){
         $categories = Category::all();
        return view('category.view', [
            'categories' => $categories,
        ]);
     }

     public function edit($category_id){
         $category = Category::find($category_id);
         return view('category.edit', [
             'category' => $category,
         ]);
     }

     public function update(Request $request){
        Category::find($request->id)->update([
            'name' => $request->name,
            'updated_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Update successfully!');
     }

     public function delete($category_id){

        $posts = Post::where('category_id', $category_id)->get();

        foreach($posts as $post){

            $image_path = public_path('/uploads/post/'.Post::find($post->id)->image);
            unlink($image_path);

            Post::find($post->id)->delete();
        }

        Category::find($category_id)->delete();

        return back()->with('success', 'A category has been deleted successfully!');
     }






















}
