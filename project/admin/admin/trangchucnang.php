<?php
session_start();

require_once('dbhelper.php');
	require_once('utility.php');
	
	$productList = executeResult('SELECT * from products');


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Hello</span>Admin</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="active"><a href="trangchucnang.php"><em class="fa fa-calendar">&nbsp;</em> Chức Năng</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Products <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Food children
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Snack Food
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Food healthy
					</a></li>
				</ul>
			</li>
			<li><a href="../users/login.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="../quantri/quantri.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Chức Năng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Chức Năng</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
					<div class="panel-body articles-container">
						<table class="table table-bordered">
							<thead>
								<tr>
									<td></td>
									<td><button class="btn btn-success"><a href="../product/add-product.php">Add product</a></button></td> 
								</tr>
								<tr>
									<th>No</th>
									<th>Title</th>
									<th>Thumbnail</th>
									<th>Content</th>
									<th>Category</th>
									<th>Price</th>
									<th style="width: 50px"></th>
									<th style="width: 50px"></th>
								</tr>
							</thead>
							<tbody>
								<?php
									$count = 0;
									foreach ($productList as $item) {
										echo '<tr>
												<td>'.(++$count).'</td>
												<td>'.$item['title'].'</td>
												<td><img src="'.$item['thumbnail'].'" style="width: 160px;"/></td>
												<td>'.$item['content'].'</td>
												<td>'.$item['category_id'].'</td>
												<td>'.$item['price'].'</td>
												<td><a href="../product/add-product.php?id='.$item['id'].'"><button class="btn btn-warning">Edit</button></a></td>
												<td><button class="btn btn-danger" onclick="deleteProduct('.$item['id'].')">Delete</button></td>
											</tr>';
									}
								?>
							</tbody>
						</table>
					</div>
						
			<div class="col-sm-12">
				<p class="back-link">Lumino The Team <a href="#">Maudz</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<script type="text/javascript">
		function deleteProduct(id) {
			option = confirm('Are you sure to delete this product?')
			if(!option) return

			$.post('form-product.php', {
				'action': 'delete',
				'id': id
			}, function(date) {
				location.reload()
			})
		}
	</script> 

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
