<?php 
	require "includes/connection.php";
	
	$id = $_POST['id'];
	
	if(isset($_POST['submit'])){
	    $user = $_POST['user'];
	    $itens = $_POST['itens'];

	}
	if(empty($id)){
	    $sql = "INSERT INTO emprestimos (id_users, id_itens) VALUES ('$user', '$itens')";
	    
	    $res = mysqli_query($conn, $sql);
	    
	    if($res){
	        header("Location: consulta.php");
	    }
	    else{
	        echo"ERRO AO INSERIR!";
	    }
	}
?>
	    	 
