<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category
;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index',compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(){
       $user = Auth::user();
       $category = Category::all();
       return view('post.create', compact('user','category'));
    }
    public function store(Request $request)
    {
        $post = $request->all();
        Post::create($post);
        return redirect()->route('post.index')->with('success','Post Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $post = Post::find($id);
         return view('home.show',compact('post'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function edit($id){
      $user = Auth::user();
      $category = Category::all();
      $post = Post::find($id);
      return view('post.edit', compact('user', 'category','post'));

    }
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $post->update($request->all());
        return redirect()->route('post.index')->with('success','Post Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $post = Post::find($id);
       $post->delete();
       return redirect()->route('post.index')->with('success','Post Successfully Deleted');
    }

    public function home(){
        $posts = Post::with('category')->get(); 
        // dd($posts);
        return view('home.home', compact('posts'));
    }
}
