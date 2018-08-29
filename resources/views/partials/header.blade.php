<html>
<style>



.dropdown-content a:hover {background-color: #474747;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #474747;}
</style>

<nav class="navbar navbar-inverse">
  <a href="/">
  <img src="https://i.imgur.com/roC8E0K.png" alt="bg" style="width: 100%; margin-left: 2px; margin-top: ">
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
        
  

  <div class="dropdown">
    <button class="dropbtn" style="width: 307px;margin-top: 3px;">Account</button>
    <div class="dropdown-content">
            <a href="{{route('login.index')}}">Login</a>
            <a href="{{route('registration.index')}}">Registration</a>
            <a href="/user/userProfile">Profile</a>
            <a href="{{route('logout')}}">Logout</a>
    </div>
  </div>








</div>

        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</html>