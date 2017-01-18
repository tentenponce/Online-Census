<?php //BACK END
	session_start();
	//login to, simple centered dialog username password.
	require_once 'db.php';
	//if may database na
	if(isset($_POST['Login'])){
	// 	$uName = $_POST['Uname'];
	// 	$uPass = $_POST['Upass'];
	// 	$accountDatas = $db -> select("",["","","","",""],["AND"=>[""=> , ""=> ]]);
	// 	if(count($accountData > 0)){
	// 		foreach($accountDatas as $accountData){
	// 			$_SESSION['account'] = $accountData;
				header("Location:admin.php");
	// 		}
	// 	}
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta name="viewportz" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row" >
			<div class="col-md-3 login-form">
				<h2>Admin Login</h2>
				<form action="login.php" method="POST" style="padding:20px;border:1px solid black; box-shadow:5px 5px rgba(0,0,0,0.5);">
					<label>Username</label>
					<input type="text" class="form-control" name="Uname" placeholder="Username"/>
					<br/>
					<label>Password</label>
					<input type="password" class="form-control" name="Upass" placeholder="Password"/>
					<br/>
					<button class="btn btn-primary pull-right" name="Login">Log In</button>
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
