<?php
require_once('../db/dbhelper.php');
require_once('../db/utility.php');

$user = validateToken();
if($user == null) {
	header('Location: ../users/login.php');
	die();
}

$sql = "select products.*, users.fullname from products, users where products.user_id = users.id and products.user_id = ".$user['id'];
$dataList = executeResult($sql);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Quicksnack Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="all,follow">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		body{
		background-color: #CBF9F4;
		}
		li {
			float: right;
		}

		li a {
			display: block;
			color: black;
			text-align: center;
			padding: 16px;
			text-decoration: none;
		}

		li a:hover {
			background-color: #111111;
		}
	</style>
</head>
<body>
	<div class="container" style="width: 100%; max-height: 50px">
		<ul style="list-style-type: none">
			<li><a href="" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a></li>
			<li><a href="" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a></li>
			<li><a href="" target="_blank" rel="noopener"><i class="fab fa-linkedin-in"></i></a></li>
			<li><a href="" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a></li>
			<li><a href="" target="_blank" rel="noopener"><i class="fab fa-pinterest"></i></a></li>
		</ul>
	</div>

	<div style="width:100%; height:100px; background-color: #CBF9F4">
		<img src="https://thietkeweb9999.com/data/upload/blog/logo/tong-hop-30-mau-logo-nganh-thuc-pham-x5.jpg" style="height:80px; padding-left:220px; margin-top:10px">
	</div>
	<nav class="navbar navbar-expand-sm bg-success navbar-dark">
		<div class="container">
			<div class="btn-group">
				<button type="button" class="btn btn-success"><a href="../quantri/home.php" style="color: white; text-decoration: none">Trang chủ</a></button>
				<button type="button" class="btn btn-success"><a href="../quantri/gioithieu.php" style="color: white ; text-decoration: none">Giới Thiệu</a></button>
				<button type="button" class="btn btn-success"><a href="../quantri/quantri.php" style="color: white; text-decoration: none">Sản phẩm</button>
				<button type="button" class="btn btn-success"><a href="../quantri/contact.php" style="color: white ; text-decoration: none">Liên hệ</a></button>		
  			</div>
			<?php
				$cart = [];
				if(isset($_COOKIE['cart'])) {
					$json = $_COOKIE['cart'];
					$cart = json_decode($json, true);
				}
				$count = 0;
				foreach ($cart as $item) {
					$count += $item['num'];
				}
			?>
				<a href="../quantri/cart.php">
					<button type="button" class="btn btn-success">
						Cart <span class="badge badge-light"><?=$count?></span>
					</button>
				</a>
				<a href="../../admin/users/login.php">
					<button type="button" class="btn btn-success" >
						<h6 style="padding-right; color: white;" ><font color="red"><?=$user['fullname']?></font>
						<a href="../users/logout.php" style="color: white;">logout</a></h6>
					</button>
				</a>
		</div>
	</nav>

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>


