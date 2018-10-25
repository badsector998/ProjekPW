<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
	<link rel="stylesheet" type="text/css" href="btstp/css/bootstrap.css">
	<script type="text/javascript" src="btstp/js/bootstrap.js"></script>
	<script type="text/javascript" src="btstp/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
	<nav class="nav navbar-default">
		<div class="nav navbar-header">
			<a class="navbar-brand" href="ProjectPS.html">RENTAL PS YOGYAKARTA</a>
		</div>
	</nav>
</div>
	

	<div class="container">
		<div class="jumbotron">
			<h1 class="display-2 border-bottom">Login Admin</h1>
			<p class="lead">Silahkan login, admin only!</p>
		</div>
	</div>

<div class="container">
	<form class="form-horizontal" method="POST" action="proses_login_admin.php">
		<div class="form-group">
			<div class="row justify-content-md-center">
				<label class="control-label col col-lg-auto" for="username">Username : </label>
				<div class="col col-md-auto"><input class="form-control col-lg4" type="text" name="username" required="1"></div>			
			</div>
		</div>
		<div class="form-group">
			<div class="row justify-content-md-center">
				<label class="control-label col-lg-auto" for="password">Password : </label>
				<div class="col-md-auto">
					<input class="form-control" type="password" name="password" required="1">
				</div>
			</div>				
		</div>
		<div class="row justify-content-md-center">
			<div class="col col-md-auto"><input class="form-control" type="submit" name="submit"></div>
		</div>
	</form>	
</div>

</body>
</html>