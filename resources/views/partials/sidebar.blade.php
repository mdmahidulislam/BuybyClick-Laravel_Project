<html>
<style>
.dropbtn {
	background-color: #282828;
	color: white;
	padding: 16px;
	font-size: 16px;
	border: none;
}

.dropdown {
	position: relative;
	display: inline-block;
}

.dropdown-content {
	display: none;
	position: absolute;
	background-color: #282828;

	min-width: 307px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
}

.dropdown-content a {
	color: black;
	color: white;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
}

.dropdown-content a:hover {background-color: #474747;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #474747;}
</style>
<div id="mainselection">
	

	<div class="dropdown">
		<button class="dropbtn" style="width: 307px">Category</button>
		<div class="dropdown-content">
			@foreach($categories as $c)
			<li><a href="/index/{{$c->id}}/Categorysearch">{{$c->categoryname}}</a></li>
			@endforeach
		</div>
	</div>








</div>
</html>
