<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $allposts = Post::where('status',1)->get();
        return view('welcome',compact('allposts'));
    }

    public function dashboard(){
        $user = Auth::user();
        $published = Post::where('status',1)->where('user_id', $user->id)->get()->count();
        $draft = Post::where('status',2)->where('user_id', $user->id)->get()->count();
        $latestPost = Post::where('user_id', $user->id)->latest()->first();
        $allPost = Post::where('user_id', $user->id)->get();

        return view('dashboard',compact('allPost','latestPost','draft','published'));
    }
}
