@extends('layouts.master')

@section('content')
  <div class="row">
    <h2>{{$catagory->catagory}}</h2> <hr>
  </div>
  <div class="row" style="margin-left:20px;">


      @foreach ($posts as $post)
      <div class="col-lg-3">
        <div class="panel panel-info">
          <div class="panel-body" style=" height:300px; overflow:hidden;">
            <h4>{{$post->title}}</h4>
            <p>{{$post->body}}</p>
          </div>
          <div class="panel-footer">
            @if(Auth::check())
              @if(Auth()->User()->id === $post->id)
               <a href="/posts/{{$post->id}}/edit" class="btn btn-md ">edit</a>
               <a href="/posts/{{$post->id}}/delete" class="btn btn-md ">delete</a>
             @endif
          @endif
               <a href="/posts/{{$post->id}}/show" class="btn btn-md">read more</a>
          </div>
        </div>
      </div>
      @endforeach



 </div>
@endsection
