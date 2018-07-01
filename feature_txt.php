		
		<!--featurd product-->
		<div class="container">
		<h2>FEATURED PRODUCTS</h2>
			
		</div>

		<!--featured product-->
        <!-- getting the value for pagination -->
        <?php 
        if (isset($_GET['pagi'])) {
            $pagi = $_GET['pagi'];
            $right = $pagi;
            $left = $pagi-6;
        }

         ?>
		
		<div class="container container-background">
		  <div class="row container-fluid row1">
		  <?php 
                if (!isset($_GET['pagi'])) {
                    $right = 6;
                    $left = 0;
                }

		  		$query_feat = "SELECT * FROM product ORDER BY id LIMIT $left,$right";
		  		$result_feat = select_fun($query_feat);
		  		while ($row_feat = $result_feat->fetch_assoc()) {
		  			
		  		

		  ?>
		    
		   
		      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 1" href="show_detail.php?<?php echo $row_feat['id']; ?>"><img class="thumbnail img-responsive centered" src="<?php echo $row_feat['image']; ?>"></a>
		      <div>
		        <h4 class="text-center"><span style="text-transform: uppercase;"><?php echo $row_feat['company']; ?> <span style="text-transform: uppercase;"><?php echo $row_feat['category'] ?></span></h4>
		        <ul class="inline">
		          <li><p>$<?php echo $row_feat['price']; ?></p></li>
		          <li><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo$row_feat['id']; ?>">BUY NOW</button></li>
		        </ul>
		      </div>
		      </div>
		      <div class="modal fade" id="myModal<?php echo$row_feat['id']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span style="text-transform: uppercase;"><?php echo $row_feat['company']; ?> <span style="text-transform: uppercase;"><?php echo $row_feat['category'] ?></span></h4>
        </div>
        <div class="modal-body">
        <img src="<?php echo $row_feat['image']; ?>" class="img-responsive center-block" height="340" width="275" style="padding-bottom: 20px;">
        <div class="row">
        <p class="col-sm-6 well well-sm" style="margin-bottom: -10px;"> TITLE:</p>
        <p class="col-sm-6 well well-sm" style="text-transform: uppercase;" style="margin-bottom: -10px;"> <?php echo $row_feat['title']; ?></p>
        	
        </div>
                <div class="row">
        <p class="col-sm-6 well well-sm"  style="margin-bottom: -10px;">DETAILS</p>
        <p class="col-sm-6 well well-sm"><?php echo $row_feat['details']; ?></p>
        	
        </div>
        <div class="row">
        <p class="col-sm-6 well well-sm" style="margin-bottom: -10px;">PRICE:</p>
        <p class="col-sm-6 well well-sm" style="margin-bottom: -10px;">$<?php echo $row_feat['price']; ?></p>
        	
        </div>
        <div class="row ">
        <p class="col-sm-6 well well-sm" style="margin-bottom: -10px;">DISCOUNT</p>
        <p class="col-sm-6 well well-sm" style="margin-bottom: -10px;"> <?php echo $row_feat['percent']; ?>%</p>
        	
        </div>





          
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">ADD TO CART</button>

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


        </div>
      </div>
      
    </div>
  </div>
		      <?php } ?>

		    
		    
		   

		  </div>
		</div>
        <div class="container text-center">              
          <ul class="pagination">
          <?php 
          $query_feat = "SELECT * FROM product WHERE 1";
          $result_feat = select_fun($query_feat);
          $rows_count = $result_feat->num_rows;
          $row_pl = ceil($rows_count/6);
          $i = 1;
            while($row_pl>=$i) {

           ?>
           <li><a href="index.php?pagi=<?php echo 6*$i?>"><?php echo $i; ?></a></li>
           <?php
           $i++;
            } ?>

          </ul>
        </div>

        </body>
        </html>


		<!--fetures products ends-->