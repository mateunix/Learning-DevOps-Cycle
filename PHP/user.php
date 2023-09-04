<?php
	require "includes/authentication.php";
	include "includes/head.php";

?>
	
		<header>
  			<h2>Coisas Emprestadas</h2>
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
						<th>Nome</th>
						<th>Sobrenome</th>
						<th>Data de Nascimento</th>
						<th>Email</th>
						<th>Telefone</th>
						<th>Cidade</th>
						<th> - </th>
						<th> - </th>
					</tr>
					<?php
					
						require "includes/connection.php";
						
						$id = $_SESSION['id'];
						
						$sql = "SELECT * FROM users WHERE id = $id";
					
						$res = mysqli_query($conn, $sql);
						
						
						if($res){
						
							while($row = mysqli_fetch_assoc($res)){
								
								echo "<tr>
										<td>". $row['id'] ."</td>
										<td>". $row['fname'] ."</td>
										<td>". $row['lname'] ."</td>
										<td>". $row['nasc'] ."</td>
										<td>". $row['email'] ."</td>
										<td>". $row['phone'] ."</td>
										<td>". $row['city'] ."</td>
										
										<td><a href='reguser.php?id=". $row['id'] ."'><button>Editar</button></a></td>
										<td><a href='deleteuser.php?id=". $row['id'] ."'><button>Excluir Conta</button></a></td>
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
