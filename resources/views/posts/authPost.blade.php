@extends('layouts.master')

@section('content')
 {{-- catagory --}}
  @include('inc.catagory')
 {{--  catagory end--}}
  <div class="row" style="">

   @foreach ($posts as $post)
     <div class="col-lg-3 " >
       <div class="panel panel-info" >
         <div class="panel-body" style=" height:300px; overflow:hidden;">
           <h3>{{$post->title}}</h3>
           <hr>
           <p>{{$post->body}}</p>

         </div>

         <div class="panel-footer">
        @if(Auth()->User()->id === $post->id)
           <a href="/posts/{{$post->id}}/edit" class="btn btn-md ">edit</a>
           <a href="/posts/{{$post->id}}/delete" class="btn btn-md ">delete</a>
        @endif
           <a href="/posts/{{$post->id}}/show" class="btn btn-md">read more</a>


         </div>
       </div>



     </div>

   @endforeach

 </div>
@endsection
