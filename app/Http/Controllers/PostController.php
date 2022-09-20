<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \App\Models\Post  $post
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $image = $request->file('image');
        $newimage = time() . $image->getClientOriginalName();
        $image->move('uploads/posts', $newimage);

        $post = Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'content' => $request->content,
            'image' => 'uploads/posts/' . $newimage,
            'slug' => Str::slug($request->title, '-'),
        ]);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $posts = Post::where('slug', $slug)->first();
        return view('posts.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image',
        ]);
        if ($request->has('image')) {
            $image = $request->image;
            $newimage = time() . $image->getClientOriginalName();
            $image->move('uploads/posts', $newimage);
            $post->image = 'uploads/posts/' . $newimage;
           
        }
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->find('id', $post->id);
        $post->delete();
        return redirect()->back();
    }
    public function softDelete($id)
    {
        $posts = Post::find($id)->delete();
        return redirect()->route('posts.index')->with('success', 'Product deleted');
    }
    public function trash()
    {
        $posts = Post::onlyTrashed()->latest()->paginate(4);
        return view('posts.trash', compact('posts'));
    }
    public function hardDelete($id)
    {
        $posts = Post::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('posts.trash')->with('success', 'Product deleted');
    }
    public function restore($id)
    {
        $posts = Post::onlyTrashed()->where('id', $id)->first()->restore();
        return redirect()->route('posts.trash')->with('success', 'Product restored');
    }
}
