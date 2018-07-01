
<!--Banner starts from here-->
	<!--start-->
	<div id="ninja-slider">
	    <div class="slider-inner">
	        <ul>
	        <?php $query = "SELECT category,title,details,image FROM product ORDER BY id DESC LIMIT 5";
	        		$results = select_fun($query);
	        		while($row = $results->fetch_assoc())  {
	        			
	        		
	        ?>
	            <li>
	                <a class="ns-img" href="<?php echo $row['image'] ?>"></a>

	                <div  class="side">
	                    <h1><?php echo $row['title']; ?></h1>
	                    <p><?php echo $row['details']; ?>. </p>
	                    <a href="categories.php?nav_v=<?php echo $row['category']; ?>"><p id="show">Shop Now</p></a>

	                </div>
	               
	                
	            </li>
	            <?php } ?>




	        </ul>
	        
	    </div>
	</div>
	<!--end-->
	<!--Banner ends-->

	<div class="clear"></div>