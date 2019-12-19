<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(request('tag')){
        $posts = Tag::where('tag', request('tag'))->firstOrFail()->posts;

      }else if (request('name')){
        $posts = User::where('author', request('name'))->firstOrFail()->posts;
      }else{
        $posts = Post::paginate(3);
      }


        return view('posts.index', ['posts'=> $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create', [
          'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      request()->validate([
        'title' => 'required',
        'abs' => 'required',
        'cont' => 'required'

      ]);
        $post = new Post();
        $post->title = request('title');
        $post->abstract = request('abs');
        $post->content = request('cont');
        $post->user_id = 1;
        $post->author = request('author');

        $post->save();

        $post->tags()->attach(request('tags'));

        return redirect('/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {


      return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
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
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post)
    {
      request()->validate([
        'title' => 'required',
        'abs' => 'required',
        'cont' => 'required'
      ]);

      $post->title = request('title');
      $post->abstract = request('abs');
      $post->content = request('cont');
      $post->user_id = 1;
      $post->author = request('author');

      $post->save();

      return redirect('/posts/'.$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
