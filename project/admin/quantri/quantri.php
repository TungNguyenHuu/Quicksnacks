<?php
	require_once('../db/dbhelper.php');
	require_once('../db/utility.php');
	
	include_once('layouts/header.php');

	$productList = executeResult('SELECT * from products');
?>
<!-- body -->
<div class="container" style ="padding-top: 50px">
	<div class="row" style="width:100%">
		<div class="col-md-3">
			<button type="button" class="btn btn-primary" style="font-size: 20px; background-color: #28a745">Danh Mục Sản Phẩm</button><br><br>
						<div style="padding-left: 20px;">
							<a href="" style="color: black; text-decoration: none;"><h5>Đồ Ăn Trẻ Em</h5></a>
							<br><br>
							<a href="" style="color: black; text-decoration: none;"><h5>Đồ Ăn Vặt</h5></a>
							<br><br>
							<a href="" style="color: black; text-decoration: none;"><h5>Đồ Ăn Dinh Dưỡng</h5></a>
							<br><br>
							<a href="" style="color: black; text-decoration: none;"><h5>Đồ Uống</h5></a>
						</div>
		</div>
		<div class="col-md-9">
			<div class="row">
				<?php
					foreach ($productList as $item) {
						echo '<div class="col-md-4 col-8">
								<a href="details.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="width: 100% ; height: 200px"></a>
								<a href="details.php?id='.$item['id'].'"><p>'.$item['title'].'</p></a>
								<a href="details.php?id='.$item['id'].'"><p><button class="btn btn-success">Chi Tiết</button></p></a>
							</div>';
					}
				?>
			</div>
		</div>		
	</div>
</div>

<?php
	include_once('layouts/footer.php');
?>