<div class="templatemo_content margin_right_10" style="width: 650px;">
<?php 

// $tam = $obj->query("select * from sanpham order by gia desc limit 0, 6");
                    $query = "SELECT * FROM san_pham";
                    $result = $obj->query ($query);
                    $data = $result->fetchAll ();
                    foreach ($data as $value) 
{                   $link_anh="hinh_anh/san_pham/".$value['hinh_anh'];
    ?>
        <div class="templatemo_product_box" style="float: left; margin-right: 20px ;width:30%;">
            <h1><?php echo $value['ten'] ?></h1>
            <img src="<?php echo $value['hinh_anh'] ?>" alt="image" />
            <div class="product_info">
                
                <h3><?php echo number_format($value['gia']) ?> VNĐ</h3>
                <div class="buy_now_button"><a href="giohang.php?masp=<?php echo $value['id'] ?>">Thêm vào</a></div>
                <div class="detail_button"><a href="chitiet.php?masp=<?php echo $value['id'] ?>">Thông tin</a></div>
            </div>
            <div class="cleaner">&nbsp;</div>
        </div>
    <?php
}
?>