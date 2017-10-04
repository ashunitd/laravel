<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
     
      <a class="navbar-brand" href="#">Blog</a>
    </div>
     <div class="navbar-header pull-right">
     @if(Auth::check())
      <a class="navbar-brand" href="#">{{Auth::user()->name}}</a>
      <a class="navbar-brand" href="/logout">Logout</a>

      @else
       <a class="navbar-brand" href="/register">Signup</a>
      <a class="navbar-brand" href="/login">Login</a>
      @endif

    </div>
  </div>
</nav>