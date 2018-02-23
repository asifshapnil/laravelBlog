@extends('layouts.master')

@section('content')
  @foreach ($users as $user)


  <div class="row">
    <div class="col-lg-3">
        <img src="http://www.girardatlarge.com/wp-content/uploads/2013/05/gravatar-60-grey.jpg" alt="" class="img-circle" weidth="100px" height="100px">
    </div>
    <div class="col-lg-5" style="margin-left:-130px; margin-top:30px;">
      @if(!Auth()->User()->first_name)
        <a href="/profile/{{$user->username}}">{{$user->username}}</a>

    @else
      <a href="/profile/{{$user->username}}">{{$user->first_name}} {{$user->last_name}}</a> <br>

    @endif

    </div>
  </div>
@endforeach
@endsection
