<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MVC con PHP Y MySQL</title>
</head>
<body>

	<form action="<?php echo $helper->url("usuarios","crear"); ?>" method="post" class="col-lg-s">
		<h3>Añadir Usuario</h3>
		<hr>
		Nombre:<input type="text" name="nombre" class="form-control">
		Apellido:<input type="text" name="apellido" class="form-control">
		Email:<input type="text" name="email" class="form-control">
		Password<input type="text" name="password" class="form-control">
		<input type="submit" name="enviar" class="btn btn-success">
	</form>

	<div class="col-lg-7">
		<h3>Usuarios</h3>
		<hr>
	</div>
	<section class="col-lg-7 usuario" style="height: 400px;overflow-y: scroll">
		<?php foreach($allusers as $user) {//recorremos el array de objetos y obtenemos el valor de las propiedades?>
		<?php echo $user->id ?>-
		<?php echo $user->nombre?>-
		<?php echo $user->apellido?>-
		<?php echo $user->email?>
		<div class="right">
			<a href="<?php echo $helper->url("usuarios","borrar"); ?>&id=<?php echo $user->id ?>" class="btn btn-danger">Borrar
			</a>
		</div>
	</section>
	<?php }?>
</body>
</html>