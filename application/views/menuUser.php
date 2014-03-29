
	<ul class="nav nav-pills nav-stacked">
		<li <?php if($menu=="viewUsers")echo 'class="active"'; ?>><a href="<?php echo site_url("user/showUser"); ?>">Ver Usuarios</a></li>
		<li <?php if($menu=="newUser")echo 'class="active"'; ?>><a href="<?php echo site_url("user/newUser"); ?>">Crear Usuario</a></li>
	</ul>
