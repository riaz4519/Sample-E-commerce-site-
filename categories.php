<?php 
	require("function.php");

?>

<?php 

	if(isset($_GET['nav_v'])){
		$nav_v = $_GET['nav_v'];
	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible">
	<title></title>
	<!--bootstrap css-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- bootstrap css ends-->
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">

	<!-- custom css-->
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<!-- custom css ends -->

</head>
<body>
<?php 
if (isset($_GET['pagi'])) {
    $pagi = $_GET['pagi'];
    $right = $pagi;
    $left = $pagi-6;
}

 ?>
<?php 
include("header.php");
?>



		
		<!--featurd product-->
		<div class="container" style="padding-top: 20px;">
		<h2 style="text-transform: uppercase;">PRODUCT ON <?php if($nav_v == 'on'){
			echo "SALE";
		}

		else{
			echo $nav_v;
		}

		 ?></h2>
			
		</div>

		<!--featured product-->
		
		<div class="container container-background">
		  <div class="row container-fluid row1">
		  <?php 
		  if (!isset($_GET['pagi'])) {
		      $right = 6;
		      $left = 0;
		  }
		  if (isset($_GET['pagi'])) {
		  	$right = $pagi;
		  	$left = $pagi-6;
		  }

		 if(isset($nav_v)){
		  		if($nav_v=='on'){
		  			$data_item = 'sale';
		  }
		  	
		  	else if($nav_v == 'male' || $nav_v == 'female'){
		  		$data_item = 'gender';

		  	}
		  	else{
		  		$data_item = 'category';
		  	}
		  	
		  		$query_feat = "SELECT * FROM product wHERE $data_item = '$nav_v' LIMIT $left,$right";
		  	
		  	}
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


		<!--fetures products ends-->
		<div class="container text-center">              
		  <ul class="pagination">
		  <?php 
		  if(!isset($pass)){
		  $query_feat = "SELECT * FROM product WHERE $data_item = '$nav_v' ";
		  $result_feat = select_fun($query_feat);

		  $rows_count = $result_feat->num_rows;
		  $row_pl = ceil($rows_count/6);
		}
		if($rows_count>6){
		  $i = 1;
		    while($row_pl>=$i) {
		    	$pass = 6*$i;
		    	if($row_pl>=$i){
		    		$pass = $rows_count;

		    	}


		   ?>
		   <li><a href="categories.php?pagi=<?php echo $pass?>&nav_v=<?php echo $nav_v; ?>"><?php echo $i; ?></a></li>
		   <?php
		   $i++;
		    } }?>

		  </ul>
		</div>



<?php 
include("footer.php");
?>
	
</body>
</html>
