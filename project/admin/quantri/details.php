<?php
	require_once('../db/dbhelper.php');
	require_once('../db/utility.php');
	include_once('layouts/header.php');

	$id = getGet('id');
	$product = executeResult('SELECT * from products where id = '.$id, true);
	if($product == null) {
		header('Location: products.php');
		die();
	}
?>

<!-- body -->
<div class="container" style="min-height: 500px; padding-top: 50px">
	<div class="row">
		<div class="col-md-5">
			<img style="width: 100%" src="<?=$product['thumbnail']?>">
		</div>
		<div class="col-md-7">
			<h2><?=$product['title']?></h2>

			<p style="font-size: 36px; color: red; padding-top: 20px"><?=number_format($product['price'], 0, ',', '.')?>đ</p>
			<button class="btn btn-success" style="width: 50%; font-size: 25px; margin-top: 20px" onclick="addToCart(<?=$id?>)">Thêm vào giỏ hàng</button>
		</div>
		
		<div class="col-md-12" style="padding-top: 10px; font-size: 20px">
            <?=$product['content']?>
        </div>
	</div>
</div>

<script type="text/javascript">
	function addToCart(id) {        
		$.post('api/cookie.php', {
			'action': 'add',
			'id': id,
			'num': 1
		}, function(data) {
			location.reload()
		})
	}
</script>

<?php
	include_once('layouts/footer.php');
?>
