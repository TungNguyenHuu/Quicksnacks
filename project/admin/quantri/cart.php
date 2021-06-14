<?php
	require_once('../db/dbhelper.php');
	require_once('../db/utility.php');
	include_once('layouts/header.php');

	$cart = [];
	if(isset($_COOKIE['cart'])) {
		$json = $_COOKIE['cart'];
		$cart = json_decode($json, true);
	}
	$idList = [];
	foreach ($cart as $item) {
		$idList[] = $item['id'];
	}
	if(count($idList) > 0) {
		$idList = implode(',', $idList);
	
		$sql = "select * from products where id in ($idList)";
		$cartList = executeResult($sql);
	} else {
		$cartList = [];
	}
?>
<!-- body -->
<div class="container" style="min-height: 700px">
	<h1 style="padding-top:50px; text-align:center">Giỏ hàng</h1>

	<div class="row" style="padding-top:50px">
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tên sản phẩm</th>
						<th>Hình ảnh</th>
						<th>Số lượng</th>
						<th>Giá tiền</th>
						<th>Tổng thanh toán</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
<?php
	$count = 0;
	$total = 0;
	foreach ($cartList as $item) {
		$num = 0;
		foreach ($cart as $value) {
			if($value['id'] == $item['id']) {
				$num = $value['num'];
				break;
			}
		}
		$total += $num*$item['price'];
		echo '
			<tr>
				<td>'.(++$count).'</td>
				<td>'.$item['title'].'</td>
				<td><img src="'.$item['thumbnail'].'" style="height: 100px"/></td>
				<td>'.$num.'</td>
				<td>'.number_format($item['price'], 0, ',', '.').'</td>
				<td>'.number_format($num*$item['price'], 0, ',', '.').'</td>
				<td><button class="btn btn-danger" onclick="deleteCart('.$item['id'].')">Delete</button></td>
			</tr>';
	}
?>
				</tbody>
			</table>
			<p style="font-size: 30px; color: red; padding-top: 30px; text-align: right">
				Tổng thanh toán: <?=number_format($total, 0, ',', '.')?>
			</p>

			<div class="row" style="padding-top: 70px">
				<div class="col-md-2">
					<a href="quantri.php">
						<button class="btn btn-success"; font-size: 20px;>Tiếp tục mua hàng</button>
					</a>
				</div>
				<div class="col-md-7"></div>
				<div class="col-md-3">
					<a href="checkout.php">
						<button class="btn btn-success"; font-size: 20px; style="text-align: right">Thủ tục thanh toán</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function deleteCart(id) {
		$.post('api/cookie.php', {
			'action': 'delete',
			'id': id
		}, function(data) {
			location.reload()
		})
	}
</script>
<?php
	include_once('layouts/footer.php');
?>