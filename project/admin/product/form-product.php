<?php
require_once('db/dbhelper.php');
require_once('db/utility.php');

$productList = executeResult('SELECT * from products');

if(!empty($_POST)) {
	$action = getPost('action');
	
	switch ($action) {
		case 'delete':
			deleteProduct();
			break;
		default:
			$id = getPost('id');		
			if($id != '') {
				updateProduct();
			} else if ($id == '') {
				addProduct();
			}
			break;
	}
}


function deleteProduct() {
	$id = getPost('id');
	$sql = 'delete from products where id = '.$id;
	execute($sql);
}

function addProduct() {
	$title = $thumbnail = $content = $price  = $category_id = $user_id = '';
	$user= validateToken();
	$title = getPost('title');
	$thumbnail = getPost('thumbnail');
	$content = getPost('content');	
	$price = getPost('price');
	$created_at = $updated_at = date('Y-m-d H:i:s');
	$category_id = getPost('category_id');
	$user_id = getPost('user_id');
	

	$sql = "insert into products(title, thumbnail, content, price, created_at, updated_at, category_id, user_id) values ('$title', '$thumbnail', '$content', '$price', '$created_at' , '$updated_at','$category_id', '$user_id')";
	execute($sql);
}

function updateProduct() {
	$title = $thumbnail = $content = $price = $category_id = $user_id =  '';
	$user= $token = '';
		if(isset($_COOKIE['token'])) {
			$token = $_COOKIE['token'];
		
			$sql = "update users set token = null where token = '$token'";
			execute($sql);
		};
	
	$title = getPost('title');
	$thumbnail = getPost('thumbnail');
	$content = getPost('content');	
	$price = getPost('price');
	$updated_at = date('Y-m-d H:i:s');
	$category_id = getPost('category_id');
	$user_id = getPost('id');
	$id = getPost('id'); 
	$sql = "update products set title = '$title', thumbnail = '$thumbnail', content = '$content', price = '$price', updated_at = $updated_at, category_id = '$category_id',user_id = '$user_id' where id = ".$id;
	execute($sql);
	header('Location: product-list.php');die();
}
