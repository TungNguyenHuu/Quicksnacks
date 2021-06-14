<?php
require_once('../db/dbhelper.php');
require_once('../db/utility.php');

if(validateToken() != null) {
	header('Location: trangchu.php');
	die();
}

require_once('form-register.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation Form - Gokisoft</title>
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
		margin: 100px auto;
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
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Register</h2>
				<?php
					if(!empty($_POST)) {
						echo '<h2 style="color: red">User is existed</h2>';
					}
				?>
			</div>
			<div class="panel-body">
				<fieldset>
					<form method="post" id="RegisterForm">
						<div class="form-group">
						<label for="usr" style="color: red;">Full Name:</label>
						<input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$fullname?>">
						</div>
						<div class="form-group">
						<label for="email" style="color: red;">Email:</label>
						<input required="true" type="email" class="form-control" id="email" name="email" value="<?=$email?>">
						</div>
						<div class="form-group">
						<label for="pwd" style="color: red;">Password:</label>
						<input required="true" type="password" class="form-control" id="pwd" name="password">
						</div>
						<div class="form-group">
						<label for="confirmation_pwd" style="color: red;">Confirmation Password:</label>
						<input required="true" type="password" class="form-control" id="confirmation_pwd" name="confirmation_pwd">
						</div>
						<p><a href="login.php">I have a account (login)</a></p>
						<button class="btn btn-success">Register</button>
					</form>
				</fieldset>	
			</div>
		</div>
	</div>
<script type="text/javascript">
	$(function() {
		$('#RegisterForm').submit(function() {
			if($('[name=password]').val() != $('[name=confirmation_pwd]').val()) {
				alert('Password is not marching, plz check it again!!!')
				return false;
			}

			return true;
		})
	})
</script>
</body>
</html>