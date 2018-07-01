


		<div class="row text-center catagories1">
			<div class="col-sm-2"><a href="index.php?slide=fa-angle-left"><i class="fa fa-angle-left fa-5x" aria-hidden="true"></i>
		</a></div>
		<?php 
			$right = 3;
			$left = 0;
			if (isset($_GET['slide'])) {
				$slide = $_GET['slide'];
			
			if($slide == 'right'){
				$right = $right+3;
				$left = $left + 3;
			}

		}

		$query_cat = "SELECT * FROM category ORDER BY id DESC LIMIT $left,$right";
		$results_cat = select_fun($query_cat);

		
		while ($rows_cat = $results_cat->fetch_assoc()) {
		?>
			<div class="col-sm-2 main">
				
				
				<img src="<?php echo $rows_cat['image']; ?>">
				<div class="float1">
				<h2>
					branded <?php echo $rows_cat['cat_name']; ?>
				</h2>
				<a href="categories.php?nav_v=<?php echo $rows_cat['cat_name']; ?>"><p class="btn btn-primary btn-sm">SHOP</p></a>
					
				</div>
					
				
				
			</div>
			<?php } ?>
			
			<div class="col-sm-1"><a href="index.php?slide=right"><i class="fa fa-angle-right fa-5x new" aria-hidden="true"></i>
	</a></div>
			
		</div>

		<!--catagories ends-->