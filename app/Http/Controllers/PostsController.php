<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use App\comment;
use App\Catagory;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function allposts(){

    }

    public function addposts($username){
      $catagory = Catagory::all();
      return view('posts/addpost')->with(['username'=> $username, 'catagory'=>$catagory]);
    }

    public function storePosts(Request $request, $username){
      $this->validate($request, [
        'title' => 'required',
        'body' => 'required',
        'catagory' => 'required'

      ]);

      $post = new Post;
      $post->title = $request->input('title');
      $post->body = $request->input('body');
      $post->user_id = Auth()->User()->id;
      $post->catagory_id = $request->input('catagory');



      $post->save();
      $userid = Auth()->User()->id;
      return redirect('posts'.'/'.$userid)->with('success','Post has been added');

    }

    public function posts($userid){
      $user = User::where('id', $userid)->first();
        $catagory = Catagory::all();
      return view('posts.authPost')->with(['posts'=>$user->posts, 'catagory'=>$catagory]);

    }

    public function editPost($id){
      $post = Post::where('id', $id)->first();
      return view('posts.edit')->with('post', $post);
    }

    public function updatePost(Request $request, $id){
      $post = Post::where('id', $id)->first();
      $post->title = $request->input('title');
      $post->body = $request->input('body');
      $post->save();
      $userid = Auth()->User()->id;
      return redirect('posts'.'/'.$userid);

    }

    public function showPost($id){
      $post = Post::where('id', $id)->first();
        $catagory = Catagory::all();

      return view('posts.showpost')->with(['post' => $post, 'comments' => $post->comments, 'catagory'=> $catagory]);
    }
    public function destroyPost($id){
      $post = Post::where('id', $id)->first();
      $post->delete();
      $userid = Auth()->User()->id;
      return redirect('posts'.'/'.$userid);
    }




}
