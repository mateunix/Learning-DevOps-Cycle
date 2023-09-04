<?php
	$conn = mysqli_connect("db", "root", "root", "CoisasEmprestadas");
	
	if ($conn == false) {
		die("ERRO: Não foi possível connectar ao MySQL." . mysqli_connect_error());
	}
	
?>
