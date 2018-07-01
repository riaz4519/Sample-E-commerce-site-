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
     <p class="well well-sm col-sm-3">CATEGORY</p>
     <p class="well well-sm col-sm-3">COMPANY</p>
     <p class="well well-sm col-sm-3">PRICE</p>
     <p class="well well-sm col-sm-3">DISCOUNT</p>
      
    </div>
    
      <?php
      $query = "SELECT * FROM product WHERE sale = 'on'";
        $result = select_fun($query);
        while($row_ss= $result->fetch_assoc()){

        


       ?>
       <div class="row center-block">
        <p class="well well-sm col-sm-3"><?php echo $row_ss['category']; ?></p>
        <p class="well well-sm col-sm-3"><?php echo $row_ss['company']; ?></p>
        <p class="well well-sm col-sm-3">$<?php echo $row_ss['price']; ?></p>
        <p class="well well-sm col-sm-3"><?php echo $row_ss['percent']; ?>%</p>
         
       </div>

       <?php } ?>
      
    
  </div>
</div>
<!-- footer include all the javascript -->

<?php include("admin_footer.php");?>

