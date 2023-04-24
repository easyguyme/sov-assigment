<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        $post = new Post([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'excerpt' => $request->input('excerpt'),

        ]);

//        mark a post as graft or publish
        if ($request->has('publish')) {
            $post->status=1;
        }else{
            $post->status=2;
        }

        if ($request->has('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('uploads'), $imageName);
            $post->image = $imageName;
        }

        $post->save();

        $user = Auth::user();
        $published = Post::where('status',1)->where('user_id', $user->id)->get()->count();
        $draft = Post::where('status',2)->where('user_id', $user->id)->get()->count();
        $latestPost = Post::where('user_id', $user->id)->latest()->first();
        $allPost = Post::where('user_id', $user->id)->get();

//        return redirect()->route('dashboard')->with('success', 'Post created successfully.');
        return view('dashboard',compact('allPost','latestPost','draft','published'))->with('success', 'Post created successfully.');;
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $post = Post::whereslug($slug)->firstOrFail();
        return view('posts.view',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::whereid($id)->firstOrFail();
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->excerpt = $request->input('excerpt');
//        mark a post as graft or publish
        if ($request->has('publish')) {
            $post->status=1;
        }else{
            $post->status=2;
        }
        if ($request->has('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('uploads'), $imageName);
            $post->image = $imageName;
        }

        $post->save();

        return redirect()->route('dashboard')->with('success', 'Post updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
       $post->delete();
        return redirect()->route('dashboard')->with('success', 'Post deleted successfully.');
    }

}
