<div class="navbar navbar-inverse">
  <nav class="" style="width:600px; margin:0 auto;">
  <div class="container-fluid">
    <ul class="nav navbar-nav" >
        @foreach ($catagory as $catagory)
          <li ><a href="/catagory/{{$catagory->id}}">{{$catagory->catagory}}</a></li>
        @endforeach
      </ul>
    </div>
  </nav>
</div>
