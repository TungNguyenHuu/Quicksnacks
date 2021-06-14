<?php
	require_once('../db/dbhelper.php');
	require_once('../db/utility.php');
	
	include_once('layouts/header.php');
?>
  <style>
  /* Make the image fully responsive */
  .container .row {
			min-height: 1000px;
	}
  .carousel-inner img {
    width: 100%;
    height: 450px;
	}
  h3, h4{
	  color: rgb(0, 217, 255);
	}
  .all{
	  padding-top: 50px;
	}
  </style>
</head>
<body>
<div class="all" style="width: 100%;">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-2">
			<button type="button" class="btn btn-primary" style="font-size: 20px; background-color: #28a745">Danh Mục Sản Phẩm</button><br><br>
					<div  style="padding-left: 20px;">
						<a href="trangdulieu/doantreem.php" style="color: black; text-decoration: none;"><h5>Đồ Ăn Trẻ Em</h5></a>
						<br><br>
						<a href="" style="color: black; text-decoration: none;"><h5>Đồ Ăn Vặt</h5></a>
						<br><br>
						<a href="" style="color: black; text-decoration: none;"><h5>Đồ Ăn Dinh Dưỡng</h5></a>
						<br><br>
						<a href="" style="color: black; text-decoration: none;"><h5>Đồ Uống</h5></a>
					</div>
		</div>
		<div class="col-md-6">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
				  <li data-target="#demo" data-slide-to="0" class="active"></li>
				  <li data-target="#demo" data-slide-to="1"></li>
				  <li data-target="#demo" data-slide-to="2"></li>
				</ul>
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="https://cdn.tgdd.vn/2020/12/CookProduct/Thuc-an-nhanh-la-gi-tac-hai-cua-thuc-an-nhanh-va-cac-loai-tot-cho-suc-khoe-1-1200x676.jpg" class="rounded" alt="Cinque Terre" width="1100" height="500">
					<div class="carousel-caption">
					  <h3>ƯU ĐÃI LỚN - GIẢM GIÁ TỚI 30%</h3>
					  <h4>Cho tất cả các mặt hàng</h4>
					</div>   
				  </div>
				  <div class="carousel-item">
					<img src="https://hitavegan.com/wp-content/uploads/2019/09/hita-chay-cac-mon-an-vat-de-lam-14.jpg" class="rounded" alt="Cinque Terre" width="1100" height="500">
					<div class="carousel-caption">
					  <h3>ƯU ĐÃI LỚN - GIẢM GIÁ TỚI 30%</h3>
					  <h4>Cho tất cả các mặt hàng</h4>
					</div>   
				  </div>
				  <div class="carousel-item">
					<img src="https://camnang.bibomart.com.vn/wp-content/media//fast%20food(1).jpg" class="rounded" alt="Cinque Terre" width="1100" height="500">
					<div class="carousel-caption">
					  <h3>ƯU ĐÃI LỚN - GIẢM GIÁ TỚI 30%</h3>
					  <h4>Cho tất cả các mặt hàng</h4>
					</div>   
				  </div>
				</div>
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
				  <span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
				  <span class="carousel-control-next-icon"></span>
				</a>
			  </div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>

<?php
	include_once('layouts/footer.php');
?>