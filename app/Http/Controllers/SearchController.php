<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchPeople(Request $request){
      $query = $request->input('search');

      if (!$query) {
        return redirect('/');
      }

      $users = User::where('first_name', 'like', '%' .$query. '%')->orWhere('last_name', 'like', '%' .$query. '%')->orWhere('email', 'like', '%' .$query. '%')->get();

      return view('search.result')->with('users', $users);


    }
}
