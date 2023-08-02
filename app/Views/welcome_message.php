<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
	<div class="container"><br> <br>
		<div class="container-fluid">
			<div>
				<a href="<?php echo base_url('agregar'); ?>"> <button type="button" class="btn btn-primary">agregar</button></a>


			</div><br>
			<table class="table table-success table-striped">
				<thead>
					<tr>
						<th scope="col">id</th>
						<th scope="col">nombre</th>
						<th scope="col">marca</th>
						<th scope="col">categoria</th>
						<th scope="col">importado</th>
						<th scope="col">descripcion</th>
                        <th scope="col">precio</th>
                        <th scope="col">acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($productos as $prod) :
						# code...
					?>
						<tr>
							<th scope="row"> <?= $prod['id_prod'] ?></th>
							<td><?= $prod['nombre_prod'] ?></td>
							<td><?= $prod['marca_prod'] ?></td>
							<td><?= $prod['categoria_prod'] ?></td>
							<td><?= $prod['importado_prod'] ?></td>
                            <td><?= $prod['descrip_prod']?></td>
                            <td><?=$prod['precio_prod']?></td>
							<td><a href="<?php echo base_url('editar/' . $prod['id_prod']) ?>"><button type="button" class="btn btn-primary">Edit</button></a> <a href="<?php echo base_url('eliminar/' . $prod['id_prod']) ?>"><button type="button" class="btn btn-danger">Borrar</button></a></td>

						</tr>
					<?php endforeach;

					?>
				</tbody>
			</table>

		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>