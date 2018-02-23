<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{


   public function getSignup(){
     return view('auth.signup');
    // return "Okk!!";

   }

   public function postSignup(Request $request)
   {
     $this->validate($request, [
       'email' => 'required|unique:users|email',
       'username' => 'required|unique:users|alpha_dash',
       'password' => 'required|min:8',
     ]);

     $user = new User;
     $user->email = $request->input('email');
     $user->username = $request->input('username');
     $user->password = bcrypt($request->input('password'));
     $user->save();

     return redirect('/signin')->with('success', 'Sign Up Successful');

   }

   public function getSignin()
   {
     return view('auth.signin');
   }

   public function postSignin(Request $request)
   {
     if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember_token'))) {
       return redirect()->back()->with('error', 'Credentials do not match');
     }
     $userid = Auth()->User()->id;

     return redirect('posts'.'/'.$userid)->with('success', 'Welcome back!!');

   }

   public function getLogout()
   {
     Auth::logout();
     return redirect('/signin');
   }
}
