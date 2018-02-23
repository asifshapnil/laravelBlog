<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function alluser(){
      $users = User::all();
      return view('alluser')->with('users', $users);
    }
}
