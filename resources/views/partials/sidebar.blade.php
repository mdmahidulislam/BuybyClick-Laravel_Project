<html>
<div class="mtt_catagory">
    <img src="https://s6.postimg.org/9m3yvl65p/catagory_icon.png" />
    Catagory
</div>
<div id="mainselection">
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav my-nav">
	        <li class="dropdown my-dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Select Product <span class="caret text-right"></span></a>
	          <ul class="dropdown-menu">
	          	@foreach($categories as $c)
	          		<li><a href="/index/{{$c->id}}/catagorysearch">{{$c->categoryname}}</a></li>
	          	@endforeach
	          </ul>
	        </li>
	      </ul>
	      </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>




</div>
</html>
