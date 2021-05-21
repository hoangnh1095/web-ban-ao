<?php
include "config.php";


?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đồ án Web of Híu</title>
    <!-- Import Bootstrap and JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js">
    </script>
    <!-- Font -->
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <!-- My CSS and JQuery -->
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="./jquery/index.js"></script>
</head>

<body>
    <!--menu-->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown"> <a class="nav-link " href="#" id="navbarDropdown"> GIÀY SNEAKER </a>
                        <div class="dropdown-content"> <a class="dropdown-item" href="#">Nam</a> <a
                                class="dropdown-item" href="#">Nữ</a> </div>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="#">BRANDS</a> </li>
                    <li class="nav-item dropdown"> <a class="nav-link" href="#" id="navbarDropdown">DÉP</a>
                        <div class="dropdown-content">
                            <div class="megamenu">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="nenxanh">Dép Nam</div>
                                        <div class="nenxanh"><a href="#">Quai Hậu</a></div>
                                        <div class="nenxanh"><a href="#">Scandal</a></div>
                                        <div class="nenxanh"><a href="#">Adidas </a></div>
                                        <div class="nenxanh"><a href="#">Nike</a></div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="nenhong">Dép Nữ</div>
                                        <div class="nenxanh"><a href="#"></a></div>
                                        <div class="nenxanh"><a href="#">Crocs</a></div>
                                        <div class="nenxanh"><a href="#">Gucci</a></div>
                                        <div class="nenxanh"><a href="#">H&m</a></div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="nenhong">Hot Sale </div>
                                        <div><a href="#">Đang cập nhập...</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link" href="#" id="navbarDropdown">TRENDING</a> </li>
                    <li class="nav-item dropdown"> <a class="nav-link" href="#" id="navbarDropdown">GIÀY THỂ THAO</a>
                        <div class="dropdown-content"> <a class="dropdown-item" href="#">Nam</a> <a
                                class="dropdown-item" href="#">Nữ</a> <a class="dropdown-item"
                                href="#">Giày leo núi</a> <a class="dropdown-item" href="#">Giày Bóng Rổ</a> <a
                                class="dropdown-item" href="#">Giày tập luyện</a> <a class="dropdown-item" href="#">
                                    Giày Chạy Bộ</a>  </div>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link" href="#" id="navbarDropdown"><span style="color:red"><b>HOT</b></a> </li>
                    <li class="nav-item dropdown"> <a class="nav-link" href="#" id="navbarDropdown">REVIEW  </a> </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--end menu -->
    <!--Product------>
    <div>
            <img class="card-img-top" src="img/San Pham/Chillin_1390x556_Mens_v1.gif" alt="Card image cap">
    </div>
    <div class="container">
        <div class="row mt-5">
            
            <div class="list-product-subtitle">
                <p><b>HÀNG BÁN CHẠY</b></p>
            </div>
                                              <?php 
                    $query = "SELECT * FROM san_pham";
                    $result = $obj->query ($query);
                    $data = $result->fetchAll ();
   
    
                    foreach ($data as $value) 
                {
                    ?>
            <div class="product-group">

                <div class="row">
   
                    <div class="product col-md-3 col-sm-6 col-12">
                        <div class="card card-product md-3">
                            <div class="productboxhover card-product col-mb-3 col-mb-6 col-mb-12"> 
                                                   

                         
                         
    
                                 <i class="fas fa-heart"><colgroup></colgroup></i><br>
                                <i class="fas fa-redo"></i><br>
                                <i class="fas fa-shopping-cart"></i> </div>
                            <<img src="<?php echo $value['hinh_anh'] ?>" alt="image" />
                            <div class="card-body">
                                <h5 class="card-title">vans đen</h5>
                                <p><b><?php echo $value['ten'] ?></b> </p> 
                                <div>
                                    <p><?php echo $value['gia'] ?>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="fa fa-star checked stars"></span> <span
                                            class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> <span class="fa fa-star"></span></p>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product md-3"> 
                            
                            <div class="productboxhover card-product mb-3"> <i class="fas fa-heart"></i><br>
                                <i class="fas fa-redo"></i><br>
                                <i class="fas fa-shopping-cart"></i> </div>
                            <img class="card-img-top" src="img/San Pham/Vans-Style-36-Retro-Sport-Biking-Red_2 (1).jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">red</h5>
                                <p><b>Vans BiKing Red</b> 
                                &nbsp; &nbsp; &nbsp; 
                                <span class="badge badge-secondary badge ">NEW</span>
                                </p> 
                             
                                <div>
                                    <p>720,000₫
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="fa fa-star checked stars"></span> <span
                                            class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> <span class="fa fa-star"></span></p>
                                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product md-3">
                            <div class="productboxhover card-product mb-3"> <i class="fas fa-heart"></i><br>
                                <i class="fas fa-redo"></i><br>
                                <i class="fas fa-shopping-cart"></i> </div>
                            <img class="card-img-top" src="img/San Pham/1-8.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">sùnloew</h5>
                                <p><b>Vans Sunflower</b> 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="badge badge-secondary badge ">HOT</span></p> 
                                <div>
                                    <p>763,000₫
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="fa fa-star checked stars"></span> <span
                                            class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> <span class="fa fa-star"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product md-3">
                            <div class="productboxhover card-product mb-3"> <i class="fas fa-heart"></i><br>
                                <i class="fas fa-redo"></i><br>
                                <i class="fas fa-shopping-cart"></i> </div>
                            <img class="card-img-top" src="img/San Pham/vans-old-skool-classic-white.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">true white</h5>
                                <p><b>Old Skool True White</b> 
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="badge badge-secondary badge ">Sale</span>
                                </p> 
                                <div>
                                    <p><strike>883,000₫</strike>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="fa fa-star checked stars"></span> <span
                                            class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> <span class="fa fa-star"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="product-group">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product md-3">
                                <h4><span class="badge badge-secondary badge ">New</span></h4>
                            <div class="productboxhover card-product mb-3"> <i class="fas fa-heart"></i><br>
                                <i class="fas fa-redo"></i><br>
                                <i class="fas fa-shopping-cart"></i> </div>
                            <img class="card-img-top" src="img/San Pham/vans-style-36-otw-repeat-vn0a3dz3rxl-1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Dress blue</h5>
                                <p><b>Vans Dress Blue</b> </p> 
                                <div>
                                    <p>763,000₫
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="fa fa-star checked stars"></span> <span
                                            class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> <span class="fa fa-star"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product md-3">
                                <h4><span class="badge badge-secondary badge ">New</span></h4>
                            <div class="productboxhover card-product mb-3"> <i class="fas fa-heart"></i><br>
                                <i class="fas fa-redo"></i><br>
                                <i class="fas fa-shopping-cart"></i> </div>
                            <img class="card-img-top" src="img/San Pham/style-36-retro-cameo-blue-6.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Gib sea</h5>
                                <p><b>Vans Gibraltar Sea</b> </p> 
                                <div>
                                    <p> 833,000₫    
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="fa fa-star checked stars"></span> <span
                                            class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> <span class="fa fa-star"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product md-3">
                                <h4><span class="badge badge-secondary badge ">New</span></h4>
                            <div class="productboxhover card-product mb-3"> <i class="fas fa-heart"></i><br>
                                <i class="fas fa-redo"></i><br>
                                <i class="fas fa-shopping-cart"></i> </div>
                            <img class="card-img-top" src="img/San Pham/vans-classic-slip-on-checkerboard-4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">slip_on</h5>
                                <p><b>VansSlip-On Checkerboard</b> </p> 
                                <div>
                                    <p>763,000₫
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="fa fa-star checked stars"></span> <span
                                            class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> <span class="fa fa-star"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product md-3">
                                <h4><span class="badge badge-secondary badge ">New</span></h4>
                            <div class="productboxhover card-product mb-3"> <i class="fas fa-heart"></i><br>
                                <i class="fas fa-redo"></i><br>
                                <i class="fas fa-shopping-cart"></i> </div>
                            <img class="card-img-top" src="img/san pham/classic-slip-on-black.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">black while </h5>
                                <p><b>Vans Slip-On ‘Black White’</b> </p> 
                                <div>
                                    <p>693,000₫
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="fa fa-star checked stars"></span> <span
                                            class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> <span class="fa fa-star"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
                    <?php
                }
                ?>
    <!--end product-->
    <!--Slide Show -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/San pham/banner_image_3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/San pham/vans-x-patterson4061-1024x1024.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/San pham/fa19-skate-baker-footwearcollection.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/San pham/fa19-vault-fridakahlo-10536.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--end slide --->
    <br>
    <!--New Arival-->
    <div class="container">
        <div class="list-product-subtitle">
            <p><B>SẢN PHẨM MỚI</B></p>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-6 col-12">
                <div class="card">
                    <button type="button" class="btn btn-outline-primary">50%<br>Discount</button>
                    <img class="card-img-top" src="img/San Pham/AnnouncementbannerVTCS.jfif" alt="Card image cap">
                    <div class="card-body">
                    </div>
                    <button type="button" class="btn btn-outline-dark">SHOP NOW</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="card">
                    <img class="card-img-top" src="img/San Pham/large_a2aefd4df17aa0f476e1629296124a14 (1).jpg" alt="Card image cap">
                    <div class="card-body">
                    </div>
                    <div class="cardarrival">   
                        <h6 class="card-title">Vans Authetic</h6><br>
                        <h6 class="card-title"><b>999,000₫ </b> </h6>
                        
                    </div>
                    <div class="arrivalhover">
                        <p><i class="fas fa-shopping-cart">&nbsp;&nbsp;</i>Mua hàng&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class="fas fa-eye"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class="fas fa-heart"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-redo"></i><br></p>
                        <p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="card">
                    <img class="card-img-top" src="img/San Pham/tải xuống (2).png" alt="Card image cap">
                    <div class="card-body">
                    </div>
                    <h9 class="card-title">Crop Hoodie<br>349,000₫</h9>

                </div>
                <div class="card">
                    <img class="card-img-top" src="img/San Pham/tải xuống (5).png" alt="Card image cap">
                    <div class="card-body">
                    </div>
                    <h9 class="card-title">Fanny Bag<br>499,000₫</h9>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="card">
                    <img class="card-img-top" src="img/San Pham/tải xuống (4).png   " alt="Card image cap">
                    <div class="card-body">
                    </div>
                    <h9 class="card-title">Pack Back<br>439,000₫</h9>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/San Pham/tải xuống (7).png" alt="Card image cap">
                    <div class="card-body">
                    </div>
                    <h9 class="card-title">Mte Jacker<br>649,000₫</h9>
                </div>
            </div>
        </div>
    </div>
    <!--end arival-->
    <!----LAST FROM BLOG---->
    <div class="container">
        <div class="row mt-6">
            <div class="list-product-subtitle">
                <p><B>TIN TỨC VỀ VANS</B></p>
            </div>
            <div class="product-group">
                <div class="row">
                    <div class="product col-sm-6 col-12">
                        <div class="cardblog card-product md-6">
                            <img class="imgblog card-img-top" src="img/San Pham/WM127I-HERO.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <div class="iconblog">
                                    <button type="button" class="btn btn-info"><i
                                            class="far fa-calendar"></i></button><br><br>
                                    <button type="button" class="btn btn-info"><i
                                            class="fas fa-heart"></i></button><br><br>
                                    <button type="button" class="btn btn-info"><i
                                            class="far fa-comment"></i></button><br>
                                </div>
                                <h5 class="card-title">BLOG TITLE DUMMY</h5>
                                <p class="card-text">Bộ sưu tập mới mang tên <b>Vans Tie-Dye Pack</b> đến từ Vans đã trở thành hiện tượng nổi bật vào mùa xuân năm 2019.</p>
                                <p class="card-text"><b>Vans Tie-Dye Pack</b>  được xây dựng theo 3 mẫu chính là Vans Slip-On, Authentic và giày Sk8-Hi.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-sm-6 col-12">
                        <div class="cardblog card-product md-6">
                            <img class="imgblog card-img-top" src="img/San Pham/FFF.JPG"
                                alt="Card image cap">
                            <div class="card-body">
                                <div class="iconblog">
                                    <button type="button" class="btn btn-info"><i
                                            class="far fa-calendar"></i></button><br><br>
                                    <button type="button" class="btn btn-info"><i
                                            class="fas fa-heart"></i></button><br><br>
                                    <button type="button" class="btn btn-info"><i
                                            class="far fa-comment"></i></button><br>
                                </div>
                                <h5 class="card-title">BLOG TITLE DUMMY</h5>
                                <p class="card-text"><b>The love pack</b> là bộ sưu tập đặc biệt của nhà Vans dùng để kỷ niệm Tháng tự hào LGBTQ vào tháng 6 vừa qua.</p>
                                <p class="card-text"><b>The love pack</b> bao gồm Sk8-Hi và Classic Slip-On.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END LAST FROM BLOG-->
        <br>
        <!----Footer---->
        <div class="footer container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="list-product-subtitle">
                        <p>ĐỊA CHỈ</p>
                    </div>
                    <div><i class="fas fa-map-marker-alt">&nbsp;&nbsp;<a href="#"> 180 CAO LỖ. PHƯỜNG 4. QUẬN 8. TP HCM
                            </a></i></div>
                    <br>
                    <div><i class="fas fa-phone">&nbsp;&nbsp; <a href="#">
                        0866 956 907 - Thứ 2 đến Thứ 7
                                </a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">0500.323232 - (8H - 21H)</a></i>
                    </div><br>
                    <div><i class="fas fa-envelope">&nbsp;&nbsp;<a href="#">Vansvietnam@gmail.com</a></i></div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="list-product-subtitle">
                        <p>SHOP</p>
                    </div>
                    <div><i class="fas fa-chevron-circle-right">&nbsp;<a href="#">All Vans</a></i></div>
                    <div><i class="fas fa-chevron-circle-right">&nbsp;<a href="#">Style</a></i></div>
                    <div><i class="fas fa-chevron-circle-right">&nbsp;<a href="#">Mens</a></i></div>
                    <div><i class="fas fa-chevron-circle-right">&nbsp;<a href="#">Womens</a></i></div>
                    <div><i class="fas fa-chevron-circle-right">&nbsp;<a href="#">Collections</a></i></div>
                    <div><i class="fas fa-chevron-circle-right">&nbsp;<a href="#">Latest Vans</a></i></div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="list-product-subtitle">
                        <p>COMPANY</p>
                    </div>
                    <div><i class="fas fa-chevron-circle-right">&nbsp;<a href="#">About Us</a></i></div>
                    <div><i class="fas fa-chevron-circle-right">&nbsp;<a href="#">Size Chart</a></i></div>
                    <div><i class="fas fa-chevron-circle-right">&nbsp;<a href="#">Hệ Thống Cửa Hàng</a></i></div>
                   
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="list-product-subtitle">
                        <p>LIÊN HỆ</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><a href="#"><img src="img/San pham/Capture1.JPG" width="70" height="70"></a><a
                                href="#"><img src="img/San pham/Capture.JPG" width="70" height="70"></a></div>
                        <div class="col-sm-6"><a href="#"><img src="img/San pham/Capture2.JPG" width="70" height="70"></a><a
                                href="#"><img src="img/San pham/Capture3.JPG" width="70" height="70"></a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="list-product-subtitle">
                        <p>NEWLASTERS</p>
                    </div>
                    <p>Receive product news and updates in your inbox.

                    </p>
                    <input type="text" value="Tìm Kiếm...">
                    <p></p>
                    <button type="button" class="btn btn-outline-primary">Subscribe</button>
                </div>
            </div>
        </div>
        <!--End Footer-->

</body>

</html>