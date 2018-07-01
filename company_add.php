<!-- Function is most important -->
<?php include("function.php"); ?>
<!-- header side all the css are includer there -->
<?php include("admin_header.php"); ?>

<!-- all the add delete catefories are there  -->

<?php include("admin_aside.php");?>
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['company']) &&  isset($_POST['company']) ){
      
      $company = mysql_real_escape_string(trim($_POST['company']));
      
      
      

      $query_input = "INSERT INTO company(com_name) VALUES('$company')";
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
    <p class="alert alert-success success-edit">Company Name Added to  database</p>
   <?php  
  }
   } 
   ?>
    
     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
       <div class="form-group">
         <label for="company">Company Name:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="company" placeholder="Enter A Company Name" name="company">
       </div>

         </div>
        
         




       <button type="submit" class="btn btn-default" style="margin-left: 15px;">Submit</button>
     </form>
   </div>

   </div>

    
      
      
    
  </div>


<!-- footer include all the javascript -->

<?php include("admin_footer.php");?>