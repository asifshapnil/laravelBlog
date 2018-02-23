@extends('layouts.master')

@section('content')
  <div class="panel-body">
    <div class="">
      <img src="" class="img-circle alert alert-danger" width="200px" height="200px">
    </div>
    <div class="pull-right dropdown">
       <button type="button" name="button" class="btn btn-primary dropdown-toggle">Action <span class="caret"> </span></button>
       <ul class="dropdown-menu">
         <li>edit</li>
         <li>leave</li>
       </ul>
       <a href="/posts/{{$user->id}}" type="button" name="button" class="btn btn-primary dropdown-toggle">See Posts </a>

       @if(Auth()->User()->username === $user->username)
       <a href="/editProfile/{{$user->username}}" type="button" name="button" class="btn btn-primary dropdown-toggle">Edit </a>
       <a href="/addpost/{{$user->username}}" type="button" name="button" class="btn btn-primary dropdown-toggle">Add Post </a>
       <a href="/panel/{{$user->id}}" type="button" name="button" class="btn btn-primary dropdown-toggle">Vist Panel </a>

      @endif

    </div>
  </div>
  <div class="panel panel-default">
  <div class="panel-heading">
    <tr>
      <th>Your info</th>
    </tr>
  </div>
  <div class="panel-body">
    <table>
    <tr><th>Name: </th><td>{{$user->first_name}}     {{$user->last_name}}</td> </tr>
    <tr><th>Email: </th><td>{{$user->email}} </tr>



  </table>

  </div>
  </div>

@endsection
