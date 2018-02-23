<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\Catagory;


class HomeController extends Controller
{
    public function index(){
      $posts = Post::orderby('id', 'desc')->paginate(20);
      $catagory = Catagory::all();
      $latestPost = Post::orderby('created_at', 'desc')->first();
      $recentPosts = Post::orderby('created_at', 'desc')->take(8)->get();


      return view('home')->with(['posts' => $posts, 'catagory' => $catagory, 'latestPost' => $latestPost, 'recentPosts' => $recentPosts]);
    }

    public function panels($id){
      $posts = Post::where('id', $id)->get();
      $catagory = Catagory::all();

      return view('admin.panel')->with(['posts' => $posts, 'catagory' => $catagory]);
    }


}
