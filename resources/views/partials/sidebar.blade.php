<html>
<style>


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
