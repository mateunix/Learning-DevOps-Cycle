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
    				<h2>Bem-vindo(a) <?php echo $_SESSION['fname']?>!</h2>
  			</article>
		</section>
<?php
	include "includes/footer.php";
?>
