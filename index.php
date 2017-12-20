<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.php");
?>
<html>
<head>
<title>Welcome to Chic Clothing</title>

<link href="styles.css" rel="stylesheet" type="text/css" />




</head>

<body>


  <div class="container">





	<?php
		include("header.php");
		if(!isset($_GET['page'])) {
		?>
  <div class="w3-content w3-section" >
  <img class="mySlides" src="images/ban.jpg" class="banner">
  <img class="mySlides" src="images/secBan.jpg" class="banner" ">
  <img class="mySlides" src="images/thBan.jpg" class="banner">
</div>
<?php
include("slideShow.js");
	}	
	?>




    <!-- Main Content --> 
    <div class="maincontent">
 <!-- main content goes here-->
      <?php 
		if(!isset($_GET['page'])) {
			include("home.php");
		} else {
			$page=$_GET['page'];
			include("$page.php");
		}
	  ?>
  </div>
 <!-- Main Content --> 









    <?php
    /* Second content*/
		include("seccontent.php");
		/*Second content */
	      

	?>
		





				<div class="footer">
					<div class="last">
					
			       <div >
			        <h4 class="text-center" id="copyRight">BEST-CAR © 2017. All Rights Reversed</h4> 
			      </div>
				</div>

				</div>
      </div><!-- Container ends here-->

</body>
</html>







