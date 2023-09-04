<?php
    require "includes/authentication.php";
	require "includes/connection.php";
	
	$id = $_SESSION['id'];
	
	$sql = "DELETE FROM users WHERE id = $id ";
	
	
	$res = mysqli_query($conn, $sql);
	
	header("Location: index.php");
	
?>
										

