<?php 
	require "includes/connection.php";
	
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$nasc = $_POST['nasc'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$city = $_POST['city'];
	$psswd = $_POST['psswd'];
	
	if(empty($id)){
		$sql = "INSERT INTO users (fname, lname, nasc, email, phone, city, psswd) VALUES ('$fname', '$lname', '$nasc', '$email', '$phone', '$city', '$psswd')";
	
		$res = mysqli_query($conn, $sql);
	
		if($res){
			header("Location: index.php");
		}
		else{
			echo"ERRO AO INSERIR!";
		}
	}
	
	else{
	        $sql = "UPDATE users SET fname = '$fname', lname = '$lname', nasc = '$nasc', email = '$email', phone = '$phone', city = '$city', psswd = '$psswd' WHERE id = $id";
	        
	        $res = mysqli_query($conn, $sql);
	        
	        if($res){
	            header("Location: user.php");
	        }
	        else{
	            echo "ERRO AO ATUALIZAR!";
	        }
	        
	    }
	    	 
?>
