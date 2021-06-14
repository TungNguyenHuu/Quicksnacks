<?php
require_once('../db/dbhelper.php');
require_once('../db/utility.php');

if(validateToken() != null) {
	header('Location: ../quantri/quantri.php');
	die();
}

require_once("form-login.php");
$user= validateToken();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    @import url('http://font.googlrapis.com/css?family=Oxygen');
	body {
		background: url(https://ae01.alicdn.com/kf/HTB1TQdjasvrK1Rjy0Feq6ATmVXaG/Hamburger-Ch-n-Burger-X-e-T-ng-Foodie-Lapel-Pin-N-t-Cho-B-G.jpg_Q90.jpg_.webp);
		padding: 0px;
		margin: 0px;
        font-family: 'Oxygen', sans-serif;
        letter-spacing: 1px;
		
    }

	.container {
		width: 50%;
		margin: 160px auto;
	}
	fieldset {
	margin-bottom: 20px;
	background-color: #e3da86;
	padding: 30px;
	}

	fieldset {
	color: #0c1a96;
	font-weight: bold;
	}

	
</style>
<body>
	<div class="container">
		<fieldset>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="text-center">Login</h2>
				</div>
				<div class="panel-body">
					<form method="post">
						<div class="form-group">
						<label for="email">Email:</label>
						<input required="true" type="email" class="form-control" id="email" name="email">
						</div>
						<div class="form-group">
						<label for="pwd">Password:</label>
						<input required="true" type="password" class="form-control" id="pwd" name="password">
						</div>
						<p><a href="register.php">Register new user</a></p>
						<button class="btn btn-success">Login</button>
					</form>
				</div>
			</fieldset>	
		</div>
	</div>
</body>
</html>