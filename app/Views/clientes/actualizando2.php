<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar registros de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container"><br> <br>
        <div class="container-fluid">
            <h1>Actualizacion de registros:</h1>
            <form action="<?= base_url('actualizarc'); ?>" method="POST">
                <div class="form-group">
                    <input type="number" hidden name="id" value="<?= $clientes['id_cliente'] ?>">
                    <label for="exampleInputEmail1">Nombres:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $clientes['nombre_cli'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Apellidos:</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $clientes['apellido_cli'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Cedula:</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" value="<?= $clientes['ci_cli'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">telefono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="<?= $clientes['telf_cli'] ?>" required aria-describedby="emailHelp">

                </div><br>
                <div class="form-group">
                    <label for="exampleInputEmail1">correo:</label>
                    <input type="text" class="form-control" id="correo" name="correo" value="<?= $clientes['correo_cli'] ?>" required aria-describedby="emailHelp">

                </div><br>
                <div class="form-group">
                    <label for="exampleInputEmail1">socio:</label>
                    <input type="text" class="form-control" id="socio" name="socio" value="<?= $clientes['socio_cli'] ?>" required aria-describedby="emailHelp">

                </div><br>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>

</body>

</html>