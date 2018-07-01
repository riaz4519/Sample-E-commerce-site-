<!-- Function is most important -->
<?php include("function.php"); ?>
<!-- header side all the css are includer there -->
<?php include("admin_header.php"); ?>

<!-- all the add delete catefories are there  -->

<?php include("admin_aside.php");?>
<?php
	 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 	if (isset($_POST['cate']) && isset($_POST['comp']) && isset($_POST['sale'])){
	 		


	 		$cate = mysql_real_escape_string(trim($_POST['cate']));
	 		$comp = mysql_real_escape_string(trim($_POST['comp']));
	 		$sale = mysql_real_escape_string(trim($_POST['sale']));
	 		
	 		

	 		$query_input = "UPDATE product SET sale = '$sale',percent = 0 WHERE category = '$cate' AND company = '$comp'";
	 		$result_input = update_fun($query_input);
	 	
	 		


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
           <label for="sel1">Categories</label>
           <select class="form-control input-sm" name="cate" id="sel1">
           <?php 
           	 $query_cat = "SELECT cat_name FROM Category where 1";
           	 	$result_cat = select_fun($query_cat);
           	 	while ( $row_cat = $result_cat->fetch_assoc()) {
           	 		
           	 	
           ?>
             <option><?php echo  $row_cat['cat_name']; ?></option>

             <?php } ?>
           </select>
           </div>
           <div class="form-group">
             <label for="sel1">Company:</label>
             <select class="form-control input-sm" name="comp" id="sel1">
             <?php 
             	 $query_com = "SELECT com_name FROM company where 1";
             	 	$result_com = select_fun($query_com);
             	 	while ( $row_com = $result_com->fetch_assoc()) {
             	 		
             	 	
             ?>
               <option><?php  echo $row_com['com_name'] ?></option>

               <?php } ?>
             </select>
             </div>
             <div class="form-group">
               <label for="sel1">Sale:</label>
               <select class="form-control input-sm" name="sale" id="sel1">
                 <option>off</option>
               </select>
               </div>



       <button type="submit" class="btn btn-default">Submit</button>
     </form>
   </div>

   </div>

    
    	
    	
  	
  </div>


<!-- footer include all the javascript -->

<?php include("admin_footer.php");?>