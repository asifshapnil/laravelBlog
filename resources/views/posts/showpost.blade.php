@extends('layouts.master')

@section('content')

    <div class="row">
      {{-- catagory starts --}}
      <div class="col-lg-3">
        <div class="navbar navbar-default">
          <nav class="" style="width:400px; margin:0 auto;">
          <div class="container-fluid">
            <ul class="nav navbar-nav" style="width:50px;">
                @foreach ($catagory as $catagory)
                  <li ><a href="/catagory/{{$catagory->id}}">{{$catagory->catagory}}</a></li>
                @endforeach
              </ul>
            </div>
          </nav>
        </div>
      </div>
      {{--  catagpry ends--}}
      <div class="col-lg-9 well">
        <h3>{{$post->title}}</h3> <hr>
        <p>{{$post->body}}</p>
        <br>
        {{-- @if(Auth()->User()->id === $post->user_id)
          <a href="posts/{{$post->id}}/edit">edit</a>
        @endif --}}
      </div>
    </div>

@if(Auth::check())
  {!! Form::open(['action' => ['CommentController@storeComment', $post->id], 'method' => 'post']) !!}
    {!! Form::label('comment', 'Comment here') !!}
    {!! Form::text('comment', '', ['class' => 'form-control', 'placeholder' => 'comment here', 'style' => 'border-radius:15px;'])!!}
<br>
    {!! Form::submit('Submit', ['class' => 'btn btn-md btn-info pull-right' ]) !!}


  {!! Form::close() !!} <br>
@endif
   <h4>Comments......</h4> <hr>
  @foreach ($comments as $comments)
    <div class="well" style="border-radius:15px;">
      <h4><a href="/profile/{{$comments->username}}">{{$comments->username}}</a></h4>

        <p>{{$comments->comment}}</p>
    </div>
  @endforeach


@endsection
