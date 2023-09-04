<?php

	include "includes/head.php";

?>
		<header>
  			<h2>Coisas Emprestadas</h2>
		</header>

		<section>
			
  			<article>
  			<?php
  			
  			if(isset($_GET['error'])){
  				echo '<p style = "text-align: center; color: red;">Usuário e/ou senha incorreto(s)</p>';
 
  			}
  			
  			if(isset($_GET['autherror'])){
  				echo '<p style = "text-align: center; color: red;">Sua sessão expirou</p>';
  			}
  			
  			?>
    			<form action="login.php" method="post">
					<label for="email">Email</label>
					<input type="text" id="email" name="email" placeholder="email">
					<label for="psswd">Password</label>
					<input type="password" id="psswd" name="psswd" placeholder="password">
					<input type="submit" value="Login">
					<a href="reguser.php"><input type="button" value="Registrar" class="buttons"></a>
				</form>
  			</article>
		</section>
<?php
	include "includes/footer.php";
?>
