<nav class="navbar navbar-inverse">
  <a href="/">
  <img src="https://i.imgur.com/kfWg4mZ.png" alt="bg" style="width: 100%; margin-left: 2px; margin-top: ">
</a>
  <div class="container-fluid">
    <!-- Home and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form method="post" action="/index/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" style="width: 900px;margin-left: 200px;
          " id="search" name="searchText" placeholder="Search" required>
        </div>
        <button type="submit" id="submit" class="button" style="margin-left: 1120px; margin-top: -38px;" >Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="{{route('cart.index')}}"><i class="glyphicon glyphicon-shopping-cart"></i> Cart({{Cart::content()->count()}})</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('login.index')}}">Login</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{route('registration.index')}}">Registration</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{route('login.index')}}">Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>