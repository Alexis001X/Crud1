<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<?php
    echo view("templates/navbar");
     ?>
<body>
	<div class="container"><br> <br>
		<div class="container-fluid">
			<div>
				<a href="<?php echo base_url('clientes/agregar2'); ?>"> <button type="button" class="btn btn-primary">agregar</button></a>
                <a href="<?php echo base_url();?>"><button type="button" class="btn btn-warning">regresar</button></a>

			</div><br>
			<table class="table table-success table-striped">
				<thead>
					<tr>
						<th scope="col">id</th>
						<th scope="col">Nombres Completos</th>
						<th scope="col">Apellidos Completos</th>
						<th scope="col">Cedula</th>
						<th scope="col">telefono/celular</th>
                        <th scope="col">Correo electronico</th>
						<th scope="col">socio</th>
                        <th scope="col">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($clientes as $cli) :
						# code...
					?>
						<tr>
							<th scope="row"> <?= $cli['id_cliente'] ?></th>
							<td><?= $cli['nombre_cli'] ?></td>
							<td><?= $cli['apellido_cli'] ?></td>
							<td><?= $cli['ci_cli'] ?></td>
							<td><?= $cli['telf_cli'] ?></td>
                            <td><?= $cli['correo_cli']?></td>
                            <td><?=$cli['socio_cli']?></td>
							<td><a href="<?php echo base_url('editarc/' . $cli['id_cliente']) ?>"><button type="button" class="btn btn-primary">Editar registro</button></a> <a href="<?php echo base_url('eliminarc/' . $cli['id_cliente']) ?>"><button type="button" class="btn btn-danger">Borrar registro</button></a></td>

						</tr>
					<?php endforeach;

					?>
				</tbody>
			</table>

		</div>
	</div>
	<?php
    echo view("templates/footer");
     ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>