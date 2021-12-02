<?php 

   $email = $_POST["email"];
   $psswd = $_POST["psswd"];
   
   require "includes/connection.php";
   
   $sql = "SELECT * FROM users WHERE email = '$email' AND psswd = '$psswd'";
   $res = mysqli_query($conn, $sql);
   
   $qtdeRegistros = mysqli_num_rows($res);
   
   if($qtdeRegistros > 0){
   	session_start();
   	
   	$row = mysqli_fetch_assoc($res);
   	
   	$_SESSION['id'] = $row['id'];
   	$_SESSION['fname'] = $row['fname'];
   	
   	header("Location: start.php");
   }
   else{
   	header("Location: index.php?error=1");
   }
?>

