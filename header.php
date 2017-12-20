


<div class="header">


    	<div class="logo">
        <a href="index.php"><img src="images/crlogo2.png" alt="Chic Clothing logo" /></a>
        </div><!--logo ends-->





        <!--website name-->
		<div class="nlogo">
 		<a href="index.php"><img src="images/nlogo.png" alt="Chic Clothing logo" /></a>
		</div>







        <!--navigation bar-->
		<div class="navigation">
          <a href="index.php?page=admin">Admin</a>

		<?php 
            $counter=0;
			$cat_sql="SELECT * FROM category";
			$cat_query=mysqli_query($dbconnect, $cat_sql);
			$cat_rs=mysqli_fetch_assoc($cat_query);
		?>
        <p><?php
			do { 
				?>
			<a href="index.php?page=category&categoryID=<?php echo $cat_rs['categoryID']; ?>"><?php echo $cat_rs['name']; ?></a>
				<?php
			} while ($cat_rs=mysqli_fetch_assoc($cat_query))
		?>
        </p>
      </div><!--navigation ends-->






     

	</div><!-- Header ends here-->

	