<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;
use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display

     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->sortby('created_at');
        // DD($posts);
        $tags = Tag::all();
        $categories = Category::all();
        // DD(response($categories));
        // DD(auth()->user()->posts);

        return view('posts.list', ['posts' => $posts, 'categories' => $categories, 'tags' => $tags]);


        // DD($posts);


    }

    public function admin()
    {
        $id = auth()->id();
        $posts = Post::where('user_id', $id)->get();
        // DD($posts);

        return view('posts.admin', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post;

        $categories = Category::all();

        return view('posts.create', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {
        $all = $request->all();

        $string = $request->tags;
        unset($all['tags']);

        $post = new Post;
        $post->fill($all);
        $post->user_id = Auth::id();
        $post->save();


        $tags = explode(',', $string);
        $tags = array_filter($tags);

        // $post->tags()->save($tags);
        foreach ($tags as $key => $tag) {
            $tag = trim($tag);
            $model = Tag::firstOrCreate(['name' => $tag]);
            // $post->tags()->attach($model->id);
            $post->tags()->save($model);
        }

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $id)
    {
        $categories = Category::all();
        $tags = $id->tags;
        if (Auth::check())
            return view('posts.showByAdmin', ['post' => $id, 'categories' => $categories, 'tags' => $tags]);
        else
            return view('posts.show', ['post' => $id, 'categories' => $categories, 'tags' => $tags]);
    }

    public function indexWithCategory(Category $category)
    {
        $categories = Category::all();
        $posts = $category->posts;
        $tags = Tag::all();
        return view('categories.listByCategory', ['posts' => $posts, 'categories' => $categories, 'tags' => $tags]);
    }

    public function indexWithTag(Tag $tag)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $posts = $tag->posts;
        return view('categories.listByCategory', ['posts' => $posts, 'categories' => $categories, 'tags' => $tags]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $id)
    {
        $categories = Category::all();
        return view('posts.edit', ['post' => $id, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBlogPost $request, Post $id)
    {
        $id->fill($request->all());
        $id->save();

        $id->tags()->detach();

        $string = $request->tags;
        $tags = explode(',', $string);
        $tags = array_filter($tags);

        foreach ($tags as $key => $tag) {
            $tag = trim($tag);
            $model = Tag::firstOrCreate(['name' => $tag]);
            $id->tags()->attach($model->id);
        }
        return redirect('/posts/' . $id->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $id)
    {
        $id->delete();
    }
}
