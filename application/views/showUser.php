<div class = "row">
	<div class="col-sm-12 col-md-4 col-lg-2">
	</div>
	<div class="col-sm-12 col-md-8 col-lg-10">
		<table class = "table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>Nombre de Usuario</th>
				<th>Contraseña</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php foreach ($users as $user):?>
					<td><?php echo $user ->id_user ?></td>
					<td><?php echo $user ->user_name ?></td>
					<td><?php echo $user ->password ?></td>
				<?php endforeach ?>
			</tr>
		</tbody>
			
		</table>
	</div>
</div>