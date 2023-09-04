<?php
    require "includes/authentication.php";
	include "includes/head.php";

?>
	
		<header>
  			<h2>Consulta de itens emprestados</h2>
		</header>

		<section>
		
  			<?php
  			
  			include "includes/menu.php";
  			
  			?>
  
  			<article>
  			<link rel="stylesheet" href="tables.css">
  				<table>
					<tr>
						<th>id</th>
						<th>Nome do Item</th>
						<th>Data de Empréstimo</th>
						<th>Telefone Dono</th>
						<th>Email Dono</th>
						
					</tr>
					<?php
					
						require "includes/connection.php";
						
						$id = $_SESSION['id'];
						
						
						$sql = "SELECT * FROM emprestimos INNER jOIN users ON users.id = emprestimos.id_users INNER JOIN itens ON itens.id = emprestimos.id_itens WHERE id_users = $id";
						
					   
						$res = mysqli_query($conn, $sql);
						
						
						if($res){
						
							while($row = mysqli_fetch_assoc($res)){
								
								echo  "<tr>
										<td>". $row['id'] ."</td>
										<td>". $row['iname'] ."</td>
										<td>". $row['eday'] ."</td>
										<td>". $row['iphone'] ."</td>
										<td>". $row['iemail'] ."</td>
										
									</tr>";
								
							}
						}
										
					?>
				</table>
  			</article>
		</section>
<?php
	include "includes/footer.php";
?>
