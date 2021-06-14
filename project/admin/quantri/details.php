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
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<img style="width: 100%" src="<?=$product['thumbnail']?>">
		</div>
		<div class="col-md-7">
			<h4><?=$product['title']?></h4>
            <div class="col-md-12">
                <?=$product['content']?>
            </div>
			<p style="font-size: 36px; color: red"><?=number_format($product['price'], 0, ',', '.')?>đ</p>
			<button class="btn btn-success" style="width: 100%; font-size: 30px;" onclick="addToCart(<?=$id?>)">Add to cart</button>
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