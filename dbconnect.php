<?php
	$dbconnect = mysqli_connect("localhost", "root", "root", "MyWebsite");
	if(mysqli_connect_errno()) {
		echo "Connection failed:".mysqli_connect_error();
		exit;
	}

?>