<!-- Function is most important -->
<?php include("function.php"); ?>
<!-- header side all the css are includer there -->
<?php include("admin_header.php"); ?>

<!-- all the add delete catefories are there  -->

<?php include("admin_aside.php");?>
<!-- sec tion -->


    <div class="pull-right col-sm-7">
    <div class="alert alert-success text-center" style="margin-top: 10px;">
    <p>Sale Items</p>
    </div>
    <div class="row center-block">
    <p class="well well-sm col-sm-1">NO.</p>

     <p class="well well-sm col-sm-4">CATEGORY</p>
      
    </div>
    
      <?php
      $query = "SELECT * FROM category WHERE 1";
        $result = select_fun($query);
        while($row_ss= $result->fetch_assoc()){

        


       ?>
       <div class="row center-block">
        <p class="well well-sm col-sm-1"><?php echo $row_ss['id']; ?></p>
        <p class="well well-sm col-sm-4"><?php echo $row_ss['cat_name']; ?></p>

         
       </div>

       <?php } ?>
      
    
  </div>
</div>
<!-- footer include all the javascript -->

<?php include("admin_footer.php");?>

