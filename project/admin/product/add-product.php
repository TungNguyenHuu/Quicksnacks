<?php
require_once('form-product.php');

$categoryList = executeResult('select * from category');
$id = getGet('id'); 
	$thisProduct = executeResult('select * from products where id = '.$id, true); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Product Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- include summernote css/js -->
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Add Product</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="title">Title:</label>
					  <input required="true" type="text" class="form-control" id="title" name="title" value="<?=($thisProduct != null)?$thisProduct['title']:''?>">
					  <input type="text" name="id" value="<?=($thisProduct != null)?$thisProduct['id']:''?>" style="display: none;">
					</div>
					<div class="form-group">
					  <label for="thumbnail">Thumbnail:</label>
					  <input required="true" type="text" class="form-control" id="thumbnail" name="thumbnail" value="<?=($thisProduct != null)?$thisProduct['thumbnail']:''?>">
					</div>
					<div class="form-group">
					  <label for="content">Content:</label>
					  <textarea class="form-control" id="content" name="content"><?=($thisProduct != null)?$thisProduct['content']:''?></textarea>
					</div>
					<div class="form-group">
					    <label for="category_id">Category:</label>
							<select class="form-control" id="category_id" name="category_id">
								<option value="">-- Select --</option>
								<option value="food children">Food children</option>
								<option value="snack Food">Snack Food</option>
								<option value="food healthy">Food healthy</option>
					  		</select>
					</div>
					<div class="form-group">
					  <label for="price">Price:</label>
					  <input type="number" class="form-control" id="price" name="price" value="<?=($thisProduct != null)?$thisProduct['price']:''?>">
					</div>
					<button class="btn btn-success">Save</button>
					<button class="btn btn-danger"><a href="../admin/trangchucnang.php"> Back</a></button>
				</form>
			</div>
		</div>
	</div>

<script type="text/javascript">
	$(document).ready(function() {
	   $('#content').summernote({
        height: 200,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['misc', ['fullscreen', 'codeview', 'undo', 'redo', 'help']]
          ]
      });
	});
</script>
</body>
</html>