@extends('layouts.master')

@section('content')
  <div class="baner" style=" ">
      <div class="row">
        <div class="col-lg-6">
        <a href="/posts/{{$latestPost->id}}/show">  <h2>{{$latestPost->title}}</h2> </a><hr>
          <p>{{$latestPost->body}}</p>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <h3>Top Recent Posts</h3> <hr>
        @foreach ($recentPosts as $recentPost)
        <div class="col-lg-3">
          <a href="/posts/{{$recentPost->id}}/show"><h4>{{$recentPost->title}}</h4> </a><hr>
            <p>{{ str_limit($recentPost->body, 50)}}</p>
        </div>
      @endforeach
    </div>
    </div>
      </div>
  </div>
<br>
@include('inc.catagory')
  <div class="row">
    @foreach ($posts as $post)
      <div class="col-lg-3">
        <div class="panel panel-info" >

          <div class="panel-body" style="height:300px;  overflow:hidden;">
            <h3>{{$post->title}}</h3>
            <hr>
            <h4>{{$post->date}}</h4>
            <p>{{$post->body}}</p>
          </div>
          <div class="panel-footer">
            <a href="posts/{{$post->id}}/show">read more</a>
          </div>
        </div>

      </div>
    @endforeach
    <br> <br>
    <div class="" style="margin-top:100px; ">
        {{$posts->render()}}
    </div>

  </div>
@endsection
