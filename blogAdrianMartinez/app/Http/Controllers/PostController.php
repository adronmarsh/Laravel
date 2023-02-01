<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Writer;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        Paginator::useBootstrap();
        $posts = Post::paginate(4);
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->get('title');
        $post->slug = Str::slug($post->title);
        $post->content = $request->get('content');
        $post->visibility = $request->has('visibility') ? 1 : 0;
        $post->writer()->associate(Writer::findOrFail($request->get('autor')));
        $post->save();

        return view('posts.guardado', compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        if ($post->visibility == 0) {
            return redirect('/posts');
        } else {
            return view('posts.show', compact('post'));
        }
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
        $post->title = $request->get('title');
        $post->slug = Str::slug($post->title);
        $post->content = $request->get('content');
        $post->visibility = $request->has('visibility') ? 1 : 0;
        $post->writer()->associate(Writer::findOrFail($request->get('autor')));
        $post->save();

        return view('posts.modificado', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

}
