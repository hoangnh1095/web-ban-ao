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

                         
                         <li><a href="loai.php?masp=<?php echo $value['id'] ?>"><?php echo $value['ten'] ?></a></li>
    
                <?php
                }
                ?>
                	
                </ul>
			
            <div class="margin_bottom_20 horizontal_divider"></div> 
			<div class="margin_bottom_20"></div>

                 
 
            <div class="margin_bottom_20"></div>
        </div> 