<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function getProfile($username)
  {
    $user = User::where('username', $username)->first();
    $userid = Auth()->User()->id;
    $post = Post::where('user_id', $userid);
    return view('profile')->with('user', $user);
  }
  public function editProfile($username)
  {
    $user = User::where('username', $username)->first();
    return view('editProfile')->with('user', $user);
  }


  public function update(Request $request, $username){
    $user = User::where('username', $username)->first();
    $user->email = $request->input('email');
    $user->username = $request->input('username');
    $user->first_name = $request->input('firstname');
    $user->last_name = $request->input('lastname');


    $user->save();
    return redirect('/profile'.'/'.$username)->with('success', 'Profile has been updated successfully');


  }

}
