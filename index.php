<?php
include "config.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Game Website Template, Free Download, XHTML/CSS Layout</title>
<meta name="keywords" content="Game Website Template, free templates, website templates, CSS, XHTML" />
<meta name="description" content="Game Website Template - download free XHTML/CSS files from templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_wrapper_outer">
<div id="templatemo_wrapper_inner">
	
    <div id="templatemo_banner"></div> <!-- end of banner -->
    
    <div id="templatemo_menu">
	    <ul>
            
            
        </ul>
    </div> <!-- end of menu -->
    
    <div id="templatemo_content_wrapper">
    
    	<div class="templatemo_side_bar margin_right_10">
        	
            <div class="header_01">LOAI SAN</div>
            	<ul>
                    <?php 
                    $query = "SELECT * FROM menu_doc";
                    $result = $obj->query ($query);
                    $data = $result->fetchAll ();
   
    
                    foreach ($data as $value) 
                {
                    ?>

                         
                         <li><a href="#"><?php echo $value['ten'] ?></a></li>
    
                <?php
                }
                ?>
                	
                </ul>
			
            <div class="margin_bottom_20 horizontal_divider"></div> 
			<div class="margin_bottom_20"></div>

            <div class="header_01">Search Any Game</div>     
            <form action="" method="post">
                  <input type="text" id="search_field" />
                  <input type="submit" value="" id="search_button" />
            </form>
            <div class="margin_bottom_20"></div>
        </div> <!-- end of left side bar -->
        
        <div class="templatemo_content margin_right_10">
        
        	<div class="content_section">
           	  <div class="header_02">Arcade Game</div>
              <div class="image_wrapper_01"><img src="images/templatemo_image_01.jpg" alt="image" /></div>
                <p><span>This  game template is provided by <a href="http://www.templatemo.com" target="_parent">TemplateMo.com</a> for free of charge.</span> You may download, modify and apply this template for your personal or business websites. Credit goes to <a href="http://www.photovaco.com" target="_blank">Free Photos</a> for photos. Praesent tempor, arcu at egestas vestibulum, lorem elit viverra velit, sit amet gravida ligula ante et sem.</p>
              <div class="margin_bottom_20"></div>
                <div class="rc_btn_01 fl"><a href="#">Read More</a></div> 
                
                <div class="cleaner"></div>
            </div>
            
            <div class="margin_bottom_20 horizontal_divider"></div> 
			<div class="margin_bottom_20"></div>
            
            <div class="content_section">
           	  <div class="header_02">Fighting Game</div>
              <div class="image_wrapper_01"><img src="images/templatemo_image_02.jpg" alt="image" /></div>
                <p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> Maecenas pretium diam commodo mauris vestibulum id accumsan enim ultrices. Quisque massa magna, porta nec congue et, elementum eget sem. Nunc vel libero libero, in dignissim urna. </p>
			  <div class="margin_bottom_20"></div>
              <div class="rc_btn_01 fl"><a href="#">Read More</a></div>  
                <div class="cleaner"></div>              
            </div>
            
        	<div class="margin_bottom_40"></div>
        </div> <!-- end of content -->
        
        <div class="templatemo_side_bar">
       		
            <div class="header_01">Latest News</div>
            
            <div class="latest_news border_bottom">
                <div class="header_03"><a href="#">Aenean a bibendum augue</a></div>
                <p>Fusce egestas feugiat turpis, ac ultrices turpis vestibulum at.</p>
			</div>
                        
            <div class="margin_bottom_10"></div>
            
			<div class="latest_news">
                <div class="header_03"><a href="#">Sed nec enim magna</a></div>
                <p>Proin lectus orci, iaculis at facilisis sed, sodales a neque.</p>
			</div>
            
          <div class="margin_bottom_20 horizontal_divider"></div> 
			<div class="margin_bottom_20"></div>
            
            <div class="header_01">Sample Video</div>

            <div class="latest_news">
            	<div class="image_wrapper_02"><span></span><a href="#"><img src="images/templatemo_image_03.jpg" alt="video" /></a></div>
                <p>Donec venenatis tellus non massa blandit vitae volutpat urna fringilla. Aenean ante lorem, vestibulum eu lacinia.</p>
	      </div>
                        
          <div class="margin_bottom_10"></div>
        </div> <!-- end of right side bar -->
    	
        <div class="cleaner"></div>    
    </div> <!-- end of content wrapper -->
    
</div>
</div>

 <div id="templatemo_footer">
        Copyright © 2024 <a href="#">Your Company Name</a> | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
   	</div> <!-- end of footer -->
    <div class="margin_bottom_10"></div>
    
    <div class="content_section">
    	<center>
       <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
	</center>
		<div class="margin_bottom_10"></div>
	</div>
</body>
</html>