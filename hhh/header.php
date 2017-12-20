<?php
?>


		<div class="header">
    	<div class="logo">
    	<!--reference to the main page-->
        <a ><img src="images/rlo.png" alt="Chic Clothing logo" /></a>
        </div><!--logo ends-->


		<div class="navigation">

    <!-- Links go here -->
		<p> <?php $cat_sql="SELECT * FROM NavBar";
			$cat_query=mysqli_query($conn, $cat_sql);
			$cat_rs=mysqli_fetch_assoc($cat_query);
		       
			do { 
			?> 

            

			 <a href="">        <?php echo $cat_rs['Feature']; ?></a>

            



			 <?php
				
				
			} while ($cat_rs=mysqli_fetch_assoc($cat_query)) ?> 
		<!--reference to the admain page-->
       <a href="admin.php">Admin</a>

        </p>
      </div><!--navigation ends-->
	</div><!-- Header ends here-->