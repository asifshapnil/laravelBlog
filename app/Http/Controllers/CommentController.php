<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;
use App\User;

use Illuminate\Http\Request;


class CommentController extends Controller
{
    public function storeComment(Request $request, $id){
      $comments = new Comment;
      $comments->comment = $request->input('comment');
      $comments->post_id = $id;



      $comments->user_id =  Auth()->User()->id;
      $comments->username =  Auth()->User()->username;

      $comments->save();
      return redirect('posts'.'/'.$id.'/'.'show')->with('success', 'comment has been added');
    }


}
