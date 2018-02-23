<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      @if (Auth::check())
        <li class="active"><a href="#">Timeline</a></li>
        <li><a href="#">Followers</a></li>
        <form class="navbar-form navbar-left" action="/search" method="get">
          <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Search People">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
      @endif
    </ul>
    <ul class="nav navbar-nav navbar-right">
      @if (Auth::check())
        <li><a href="/profile/{{Auth()->User()->username}}">{{Auth::User()->getName()}}</a></li>
        <li><a href="/editProfile/{{Auth()->User()->username}}">Update Profile</a></li>
        <li><a href="/logout">Log Out</a></li>
      @else
        <li><a href="/signin">Sign In</a></li>
        <li><a href="/signup">Sing Up</a></li>
      @endif
    </ul>
  </div>
</nav>
