<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("DbConnector.php");
?>
<html>
<head>
<title>Welcome to Car Rental</title>

<link href="carRent.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
	<?php
      include("header.php");
	// check to see if user is visiting a page other than the home page
	if(!isset($_GET['page'])) {
		?><div class="banner"><img src="images/banner.jpg" alt="Chic clothing" /></div>
		<?php
	}
	
	?>
	
    <div class="maincontent">
		<?php 
			if(!isset($_GET['page'])) {
				include("main.php");
			} else {
				$page=$_GET['page'];
				include("$page.php");
			}

	?>

    <div class="maincontent">
 <!-- main content goes here-->
      <p>Lorem ipsum goes here</p>
  </div>
    <?php
		include("content.php");
	?>

	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>