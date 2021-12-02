<?php
	
	require "includes/connection.php";
	include "includes/head.php";
	require "includes/authentication.php";
	
?>
	
		<header>
  			<h2>Itens para Empréstimos</h2>
		</header>

		<section>
		
  			<?php
  			
  			include "includes/menu.php";
  			
  			?>
  
  			<article>
  				<form method="post" action="recebeemp.php">
  				
					<input type="hidden" name="user" value="<?php echo $_SESSION['id'];?>">
					<label for="itens">Itens para Empréstimo: </label> 
					<select name="itens">
						<option>Selecione um item</option>
						<?php
						
							$sql = "SELECT id, iname FROM itens";
							
							$res = mysqli_query($conn, $sql);
							
							if($res) {
							
								while($row = mysqli_fetch_assoc($res)){
								
									echo "<option value= ".$row['id'].">".$row['iname']."</option>";
								
								}
							
							}
						
						?>
						
					</select>

					<input type="submit" value="Emprestar" name="submit">
		
				</form>
  			</article>
		</section>
<?php
	include "includes/footer.php";
?>
