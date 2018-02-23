@extends('layouts.master')

@section('content')
  {{-- side bar --}}
<div class="row">
  <div class="col-lg-3"style="min-height:100vh; margin-left:-105px;margin-top:-20px; " >
    <div class="list-group well" style="height:100vh; background:#F8F8F8;">
      <ul class="list-group" style="margin-top:-20px; background-color:transparent;">
        <li class="list-group-item"  style="background-color:transparent; margin-right:-20px; margin-left:-20px;"><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i> Dashboar</a></li>
        <li data-toggle="collapse" data-target="#demo" class="list-group-item" style="background-color:transparent; margin-right:-20px; margin-left:-20px;"><a href="#"><i class="glyphicon glyphicon-plus"></i> Add New Item <span class="caret"></span></a>
          <ul id="demo" class="collapse">
            <li id="inner-li" class = "list-group-item" style="background-color:transparent; margin-right:-20px; margin-left:-20px;"><a href="/addpost/{{Auth()->User()->username}}"><i class="glyphicon glyphicon-pencil"></i> Add Post</a></li>
            <li id="inner-li" class = "list-group-item" style="background-color:transparent; margin-right:-20px; margin-left:-20px;"><a href="/addcatagory"><i class="glyphicon glyphicon-th-list"></i> Add Category</a></li>
          </ul>
        </li>
        <li class = "list-group-item" style="background-color:transparent; margin-right:-20px; margin-left:-20px;"><a href="/posts/{{Auth()->User()->id}}"><i class="glyphicon glyphicon-book"></i> Posts</a></li>
        <li class = "list-group-item" style="background-color:transparent; margin-right:-20px; margin-left:-20px;"><a href="/seecatagories"><i class="glyphicon glyphicon-book"></i> catagories</a></li>

        <li class="list-group-item" style="background-color:transparent; margin-right:-20px; margin-left:-20px;"><a href="/allusers"><i class="glyphicon glyphicon-user"></i> Users</a></li>
      </ul>
    </div>
  </div>

  {{-- sidebar ends --}}

  {{-- panel starts --}}
  <div class="col-lg-9">
    <div class="row">
    <div class="col-lg-4">
      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-8">
              <h1><i class="glyphicon glyphicon-signal"></i></h1>
            </div>
            <div class="col-xs-4">
              <h1>12</h1>
            </div>
          </div>
        </div> <!-- panel header ends -->
        <div class="panel-footer">
          <div class="row">
            <div class="col-xs-9">
              <a href="viewpost.php">View Posts</a>
            </div>
            <div class="col-xs-3">
              <span class="glyphicon glyphicon-chevron-right pull-right"></span>
            </div>
          </div>
        </div> <!--panel footer ends-->
      </div>
  </div>

  <div class="col-lg-4">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-8">
            <h1><i class="glyphicon glyphicon-signal"></i></h1>
          </div>
          <div class="col-xs-4">
            <h1>12</h1>
          </div>
        </div>
      </div> <!-- panel header ends -->
      <div class="panel-footer">
        <div class="row">
          <div class="col-xs-9">
            <a href="viewpost.php">View Posts</a>
          </div>
          <div class="col-xs-3">
            <span class="glyphicon glyphicon-chevron-right pull-right"></span>
          </div>
        </div>
      </div> <!--panel footer ends-->
    </div>
  </div>
  <div class="col-lg-4">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-8">
            <h1><i class="glyphicon glyphicon-signal"></i></h1>
          </div>
          <div class="col-xs-4">
            <h1>12</h1>
          </div>
        </div>
      </div> <!-- panel header ends -->
      <div class="panel-footer">
        <div class="row">
          <div class="col-xs-9">
            <a href="viewpost.php">View Posts</a>
          </div>
          <div class="col-xs-3">
            <span class="glyphicon glyphicon-chevron-right pull-right"></span>
          </div>
        </div>
      </div> <!--panel footer ends-->
    </div>
  </div>

 </div>

<div class="row">
 <div class="col-lg-4">
   <div class="panel panel-warning">
     <div class="panel-heading">
       <div class="row">
         <div class="col-xs-8">
           <h1><i class="glyphicon glyphicon-signal"></i></h1>
         </div>
         <div class="col-xs-4">
           <h1>12</h1>
         </div>
       </div>
     </div> <!-- panel header ends -->
     <div class="panel-footer">
       <div class="row">
         <div class="col-xs-9">
           <a href="viewpost.php">View Posts</a>
         </div>
         <div class="col-xs-3">
           <span class="glyphicon glyphicon-chevron-right pull-right"></span>
         </div>
       </div>
     </div> <!--panel footer ends-->
   </div>
 </div>

 <div class="col-lg-4">
   <div class="panel panel-info">
     <div class="panel-heading">
       <div class="row">
         <div class="col-xs-8">
           <h1><i class="glyphicon glyphicon-signal"></i></h1>
         </div>
         <div class="col-xs-4">
           <h1>12</h1>
         </div>
       </div>
     </div> <!-- panel header ends -->
     <div class="panel-footer">
       <div class="row">
         <div class="col-xs-9">
           <a href="viewpost.php">View Posts</a>
         </div>
         <div class="col-xs-3">
           <span class="glyphicon glyphicon-chevron-right pull-right"></span>
         </div>
       </div>
     </div> <!--panel footer ends-->
   </div>
 </div>

<div class="col-lg-4">
  <div class="panel panel-danger">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-8">
          <h1><i class="glyphicon glyphicon-signal"></i></h1>
        </div>
        <div class="col-xs-4">
          <h1>12</h1>
        </div>
      </div>
    </div> <!-- panel header ends -->
    <div class="panel-footer">
      <div class="row">
        <div class="col-xs-9">
          <a href="viewpost.php">View Posts</a>
        </div>
        <div class="col-xs-3">
          <span class="glyphicon glyphicon-chevron-right pull-right"></span>
        </div>
      </div>
    </div> <!--panel footer ends-->
  </div>
</div>

</div>
{{-- panel ends --}}

{{-- panel-post-starts --}}

{{-- catagory --}}
 @include('inc.catagory')
{{--  catagory end--}}
 <div class="row">

  @foreach ($posts as $post)
    <div class="col-lg-4" >
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

{{-- panel-post-ends --}}


</div>
</div>







@endsection
