<?php //BACK END
  //login to, simple centered dialog username password.
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta name="viewportz" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style>

		.login-form  {
            position: fixed;
            top: 50%;
            margin-top: -19.375rem;
            left: 50%;
            margin-left: -16.5rem;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row" >
			<div class="col-md-3 login-form">
				<h2>Admin Login</h2>
				<form action="login.php"  style="padding:20px;border:1px solid black; box-shadow:5px 5px rgba(0,0,0,0.5);">
					<label>Username</label>
					<input type="text" class="form-control" name="Uname" placeholder="Username"/>
					<br/>
					<label>Password</label>
					<input type="password" class="form-control" name="UPass" placeholder="Password"/>
					<br/>
					<button class="btn btn-primary pull-right">Log In</button>
					<br/>
				</form>
			</div>
		</div>
	</div>
</body>

<script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(function(){
    var form = $(".login-form");
    form.css({
        opacity: 1,
        "-webkit-transform": "scale(1)",
        "transform": "scale(1)",
        "-webkit-transition": ".5s",
        "transition": ".5s"
    });
});
</script>
</html>
