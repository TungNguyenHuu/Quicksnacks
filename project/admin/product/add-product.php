<?php
require_once('db/dbhelper.php');
require_once('db/utility.php');

		$title = $thumbnail = $content = $price = $category_id = '';
		if(!empty($_POST)) {
			// $user = 
			$title = getPost('title');
			$thumbnail = getPost('thumbnail');
			$content = getPost('content');
			$price = getPost('price');
			$category_id = getPost('category_id');
			$created_at = $updated_at = date('Y-m-d H:i:s');

		}
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
					  <input required="true" type="text" class="form-control" id="title" name="title" >
					</div>
					<div class="form-group">
					  <label for="thumbnail">Thumbnail:</label>
					  <input required="true" type="text" class="form-control" id="thumbnail" name="thumbnail" >
					</div>
					<div class="form-group">
					  <label for="content">Content:</label>
					  <textarea class="form-control" id="content" name="content"></textarea>
					</div>
					<div class="form-group">
					  <label for="price">Price:</label>
					  <input type="number" class="form-control" id="price" name="price" >
					</div>
					<div class="form-group">
						<label for="category">Category</label>
						<select class="form-control" name="cate_id" id="cate_id">
							<option>Chọn Danh Mục:</option>
								<?php 
									$sql = "select * from category";
									$productList = executeResult($sql);

									foreach ($productList as $item) {
										echo '<option value="'.$item['id'].'">'.$item['name'].'</option>';
									}
								?>
						</select>
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
