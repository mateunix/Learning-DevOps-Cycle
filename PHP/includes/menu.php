<?php
	$pactive = $_SERVER['PHP_SELF'];
	$components = explode('/', $pactive);
	$page = isset($components[2]);
	
	
?>
<nav>
	<ul id="menu" name="menu">
		<li><a href="start.php" class="<?php if($page == 'start.php') {echo 'active';}else{echo'noactive';} ?>">Inicio</a></li>
		<li><a href="regitem.php" class="<?php if($page == 'regitem.php') {echo 'active';}else{echo'noactive';} ?>">Empreste seus itens</a></li>
		<li><a href="item.php" class="<?php if($page == 'item.php') {echo 'active';}else{echo'noactive';} ?>">Itens para Empréstimo</a></li>
		<li><a href="consulta.php" class="<?php if($page == 'consulta.php') {echo 'active';}else{echo'noactive';} ?>">Consulte seus itens</a></li>
		<li><a href="user.php" class="<?php if($page == 'user.php') {echo 'active';}else{echo'noactive';} ?>">Meu Perfil</a></li>
		<li><a href="logout.php" class="<?php if($page == 'logout.php') {echo 'active';}else{echo'noactive';} ?>">Logout</a></li>
    	</ul>
</nav>
