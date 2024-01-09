<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys = Category::all();
     
        return view('category.index', compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(){

       return view('category.create');

    }
    public function store(Request $request)
    {
       $category=$request->all();
       Category::create($category);
       return redirect()->route('category.index')->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

     public function edit($id){
     $category = Category::find($id);
      return view('category.edit', compact('category'));

     }
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $category->update($request->all());
        return redirect()->route('category.index')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('success','Category Successfully Deleted');
    }

    public function menu(){
        $categorys = Category::with('post')->get();
        return view('dashboard', compact('categorys'));
    }

    public function categoryPost ($id){
        $posts = Category::with('post')->find($id);
       
        return view('category.post', compact('posts'));

    }
}
