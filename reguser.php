<?php
	require "includes/connection.php";
	include "includes/head.php";
	
	$id = "";
	$fname = "";
	$lname = "";
	$nasc = "";
	$email = "";
	$phone = "";
	$city = "";
	$psswd = "";
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT * FROM users WHERE id = $id";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		
		$fname = $row['fname'];
		$lname = $row['lname'];
		$nasc = $row['nasc'];
		$email = $row['email'];
		$phone = $row['phone'];
		$city = $row['city'];
		$psswd = $row['psswd'];
	}
	
?>
	
		<header>
  			<h2>Registro de Usuário</h2>
		</header>

		<section>
  
  			<article>
    				<form name="registro" method="post" action="recebeuser.php">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<label for="fname">Nome:</label>
					<input type="text" name="fname" id="fname" placeholder="nome" value="<?php echo $fname; ?>">
					<label for="lname">Sobrenome:</label>
					<input type="text" name="lname" id="lname" placeholder="sobrenome" value="<?php echo $lname; ?>">
					<label for="nasc">Data de Nascimento:</label>
					<input type="date" name="nasc" id="nasc" name="nasc" value="<?php echo $nasc; ?>">
					<label for="email">Email:</label>
					<input type="text" name="email" id="email" placeholder="user@email.com" value="<?php echo $email; ?>">
					<label for="phone">Telefone:</label>
  					<input type="tel" id="phone" name="phone" placeholder="+554199999999" value="<?php echo $phone; ?>">
  					<label for="city">Cidade:</label>
  					<input type="text" id="city" name="city" placeholder="Cidade" value="<?php echo $city; ?>">
					<label for="psswd">Password:</label>
					<input type="password" name="psswd" id="pswwd" placeholder="password" value="<?php echo $psswd; ?>">
					<input type="submit" value="Registrar" class="buttons">
					<a href="index.php"><input type="button" value="Voltar a homepage" class="buttons"></a>

				</form>
  			</article>
		</section>
<?php
	include "includes/footer.php";
?>
