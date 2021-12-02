<?php 
	require "includes/connection.php";
	
	$id = $_POST['id'];
	$iname = $_POST['iname'];
	$itype = $_POST['itype'];
	$iemail = $_POST['iemail'];
	$iphone = $_POST['iphone'];
	$icity = $_POST['icity'];
	$iday = $_POST['iday'];
	
	if(empty($id)){
		$sql = "INSERT INTO itens (iname, itype, iemail, iphone, icity) VALUES ('$iname', '$itype', '$iemail', '$iphone', '$icity')";
	
		$res = mysqli_query($conn, $sql);
	
		if($res){
			header("Location: item.php");
		}
		else{
			echo"ERRO AO INSERIR!";
		}
	}
	    	 
?>
