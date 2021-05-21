<div class="templatemo_content margin_right_10" style="width: 650px;">
            <?php
$masp= $_GET['masp'];
$query = "select * from san_pham where id='$masp'";
$result = $obj->query ($query);
$data = $result->fetch ();
?>
<h1><?php echo $data['ten'] ?></h1>
<div class="image_panel" style="float: left; padding-right: 20px;"><img src="<?php echo $data['hinh_anh'] ?>" alt="CSS Template" width="200" height="300" /></div>
<div class="buy_now_button" style="font-size: 20px"><a href="giohang.php?masp=<?php echo $value['id'] ?>">Thêm vào giỏ hàng</a></div>

<ul style="font-size: 16px; float: left;">
    <li><?php echo "Tên: " .$data['ten'] ?></li>
    <li><?php echo "Giá: " .$data['gia']." VNĐ" ?></li>
    <li><?php echo "Noi dung: " .$data['noi_dung'] ?></li>
    
</ul>

<br><br><br><br><br>
