<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	@include('partials.head')
</head>
<body id="adminlogin">
	<div class="container">
	    <div class="row">
	        <div class="col-md-5 full-panel">
	            <div class="panel panel-primary">
	                <div class="panel-heading font">
	                    <span class="glyphicon glyphicon-lock"></span> Login</div>
	                <div class="panel-body">
	                	@if(session('message'))
	                		<div class=" panel panel-danger">
	                			<label>{{session('message')}}</label>
	                		</div>
	                	@endif
	                    <form class="form-horizontal" role="form" method="post">
		                    <div class="form-group">
		                        <label for="inputEmail3" class="col-sm-3 control-label font">
		                            Username</label>
		                        <div class="col-sm-9">
		                            <input type="text" class="form-control font" id="inputEmail3" placeholder="Username" name="username">
		                        </div>
		                        <p class="text-danger">
		                        	@if($errors->has('username'))
		                        		{{$errors->first('username')}}
		                        	@endif
		                        </p>
		                    </div>
		                    <div class="form-group">
		                        <label for="inputPassword3" class="col-sm-3 control-label font">
		                            Password</label>
		                        <div class="col-sm-9">
		                            <input type="password" class="form-control font" id="inputPassword3" placeholder="Password" name="password">
		                        </div>
		                        <p class="text-danger">
		                        	@if($errors->has('password'))
		                        		{{$errors->first('password')}}
		                        	@endif
		                        </p>
		                    </div>
		                    <div class="form-group">
		                        <div class="col-sm-offset-3 col-sm-9">
		                            <div class="checkbox">
		                                <label class="font">
		                                    <input type="checkbox"/>
		                                    Remember me
		                                </label>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="form-group last">
		                        <div class="col-sm-offset-3 col-sm-9">
		                            <button type="submit" class="btn btn-success btn-sm font glyphicon glyphicon-log-in"> Login</button>
	                                 <button type="reset" class="btn btn-default btn-sm font">
	                                Reset</button>
		                        </div>
		                    </div>
	                    </form>
	                	<button type="submit" class=" pull-right btn-link font"></button><br>
	                </div>
	                <div class="panel-footer font">
	                   
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<hr>
	<footer class="bg-dark text-white">
	<% include ../partials/footer %>
	</footer>

</body>
</html>