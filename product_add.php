<!-- Function is most important -->
<?php include("function.php"); ?>
<!-- header side all the css are includer there -->
<?php include("admin_header.php"); ?>

<!-- all the add delete catefories are there  -->

<?php include("admin_aside.php");?>
<?php
	 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 	if(isset($_POST['title']) && isset($_POST['gender']) && isset($_POST['cate']) && isset($_POST['comp']) && isset($_POST['sale']) && isset($_POST['details']) && isset($_POST['image']) && 
	 		isset($_POST['price']) && isset($_POST['percent'])){
	 		
	 		$title = mysql_real_escape_string(trim($_POST['title']));
	 		$gender = mysql_real_escape_string(trim($_POST['gender']));
	 		$cate = mysql_real_escape_string(trim($_POST['cate']));
	 		$comp = mysql_real_escape_string(trim($_POST['comp']));
	 		$sale = mysql_real_escape_string(trim($_POST['sale']));
	 		$details = mysql_real_escape_string(trim($_POST['details']));
	 		$image = mysql_real_escape_string(trim($_POST['image']));
	 		$price = mysql_real_escape_string(trim($_POST['price']));
	 		$percent = mysql_real_escape_string(trim($_POST['percent']));

	 		

	 		$query_input = "INSERT INTO product (gender,category,company,title,details,image,price,sale,percent) VALUES('$gender','$cate','$comp','$title','$details','$image','$price','$sale','$percent')";
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
         <label for="title">TITLE:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="title" placeholder="Enter A Title" name="title">
       </div>
       <div class="form-group">
         <label for="sel1">Gender:</label>
         <select class="form-control input-sm" name="gender" id="sel1">
           <option>male</option>
           <option>female</option>

         </select>
         </div>
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
                 <option>on</option>
                 <option>off</option>

               </select>
               </div>
               <div class="form-group">
                 <label for="percent">Percent:</label>
                 <input type="text" class="form-control input-sm" id="sel1" id="percent" placeholder="percent" name="percent">
               </div>

       <div class="form-group">
         <label for="details">Details:</label>
         <textarea class="form-control input-sm" id="sel1" rows="3" id="details" placeholder="enter details for product" name="details"></textarea>
       </div>
       <div class="form-group">
         <label for="image">IMAGE:</label>
         <input type="file" id="image" name="image" accept="image/*">
       </div>
       <div class="form-group">
         <label for="price">Price:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="price" placeholder="price" name="price">
       </div>

       <button type="submit" class="btn btn-default">Submit</button>
     </form>
   </div>

   </div>

    
    	
    	
  	
  </div>


<!-- footer include all the javascript -->

<?php include("admin_footer.php");?>