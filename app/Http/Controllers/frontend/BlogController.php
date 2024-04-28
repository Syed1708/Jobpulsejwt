<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts = Blog::where('status', 'published')->latest()->get();
        return view('pages.blogs.index', compact('posts'));
    }

    public function create(){
        return view('pages.blogs.create');
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'description' => 'nullable|string',
            'category' => 'required|string',
            'tags' => 'nullable|array',
            'status' => 'required|string',
            'featured_image' => 'required|image',
        ]);

        //Image Upload
        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $fileNameToStore = 'post_image_'.md5((uniqid())).time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $fileNameToStore);
        }

        //Blog Save
        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'tags' => $request->tags,
            'status' => $request->status,
            'featured_image' =>  $fileNameToStore,
        ]);

        return redirect()->route('posts.index')->with('success', 'Blog Created Successfully');    
    }

    public function show($id){
        $post = Blog::findOrFail($id);
        return view('pages.blogs.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Blog::findOrFail($id);
        return view('pages.blogs.edit', compact('post'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'title' => 'required',
            'description' => 'nullable|string',
            'category' => 'required|string',
            'tags' => 'nullable|array',
            'status' => 'required|string',
            'featured_image' => 'nullable|image',
        ]);

        //Image Upload
        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $fileNameToStore = 'post_image_'.md5((uniqid())).time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $fileNameToStore);
        }

        //Blog Save
        $post = Blog::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'tags' => $request->tags,
            'status' => $request->status,
            'featured_image' =>  $request->hasFile('featured_image') ? $fileNameToStore : $post->featured_image,
        ]);

        return redirect()->route('posts.index')->with('success', 'Blog updated Successfully');    
    }



    public function destroy($id){
        $post = Blog::findOrFail($id);
        $post->delete();
        return redirect()->back()->with('success', 'Blog Deleted Successfully');
    }
}
