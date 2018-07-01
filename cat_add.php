<!-- Function is most important -->
<?php include("function.php"); ?>
<!-- header side all the css are includer there -->
<?php include("admin_header.php"); ?>

<!-- all the add delete catefories are there  -->

<?php include("admin_aside.php");?>
<?php
	 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 	if(isset($_POST['image']) &&  isset($_POST['cate']) ){
	 		
	 		$image = mysql_real_escape_string(trim($_POST['image']));
	 		
	 		$cate = mysql_real_escape_string(trim($_POST['cate']));

	 		

	 		$query_input = "INSERT INTO category(cat_name,image) VALUES('$cate','$image')";
	 		$result_input = insert_fun($query_input);
	 	
	 		


	 }
	}
?>


   <div class="pull-right col-sm-4">
   <div class="container" >
   <?php 
   if (isset($result_input)) {
   	if ($result_input==1) {
   
   
   
   	?>
   	<p class="alert alert-success success-edit">Product Added to the database</p>
   <?php	
	}
   } 
   ?>
    
     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
       <div class="form-group">
         <label for="category">Category name:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="category" placeholder="Enter A Category" name="cate">
       </div>

         </div>
        
         


       <div class="form-group" style="margin-left: 15px;">
         <label for="image">IMAGE:</label>
         <input type="file" id="image" name="image" accept="image/*" class="submit-margin" >
       </div>

       <button type="submit" class="btn btn-default" class="submit-margin" style="margin-left: 15px;">Submit</button>
     </form>
   </div>

   </div>

    
    	
    	
  	
  </div>


<!-- footer include all the javascript -->

<?php include("admin_footer.php");?>