<?php
	include "includes/authentication.php";
	include "includes/head.php";

?>
	
		<header>
  			<h2>Registro de Itens</h2>
		</header>

		<section>
  			
  			<?php
  			
  			include "includes/menu.php";
  			
  			?>
  
  			<article>
    				<form name="registro" method="post" action="recebeitem.php">
					<label for="iname">Nome do item:</label>
					<input type="text" id="iname" name="iname" placeholder="nome do item">
					<label for="itype">Tipo do item:</label>
					<input type="text" id="itype" name="itype" placeholder="tipo do item">
					<label for="iemalil">Email:</label>
					<input type="text" name="iemail" id="iemail" placeholder="user@email.com">
					<label for="iphone">Telefone:</label>
  					<input type="tel" id="iphone" name="iphone" placeholder="+554199999999">
  					<label for="icity">Cidade:</label>
  					<input type="text" id="icity" name="icity" placeholder="Cidade">
  					<input type="hidden" id="iday" name="iday">
					<input type="submit" value="Registrar" class="buttons">
					<a href="index.php"><input type="button" value="Voltar a homepage" class="buttons"></a>
  			</article>
		</section>
<?php
	include "includes/footer.php";
?>
