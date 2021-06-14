<?php
	require_once('../db/dbhelper.php');
	require_once('../db/utility.php');
	include_once('layouts/header.php');
?>


<div class="container" style="border: solid 1px grey; margin-top:40px; padding-top:20px">
    <form>
        <label for="user">Tên người nhận:</label>
        <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Nhập tên người nhận" id="user">

        <label for="email" class="mr-sm-2">Email:</label>
        <input type="email" class="form-control mb-2 mr-sm-2" placeholder="Nhập email" id="email">

        <label for="phone" class="mr-sm-2">Số điện thoại:</label>
        <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Nhập số điện thoại" id="phone">

        <label for="address">Địa chỉ chi tiết:</label>
        <input type="text" class="form-control mb-2 mr-sm-2" placeholder="VD: Số 54 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội" id="address">

        <label for="note" style="width: 100%">Ghi chú:</label>
        <textarea id="note" name="note" rows="4" cols="50" style="width: 100%;"></textarea>

        <button type="submit" class="btn btn-primary" style="margin-bottom: 20px">Đặt hàng</button>
    </form>
</div>

<?php
	include_once('layouts/footer.php');
?>