<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container"><br> <br>
        <div class="container-fluid">
            <h1>Actualizacion de registros:</h1>
            <form action="<?= base_url('actualizar'); ?>" method="POST">
                <div class="form-group">
                    <input type="number" hidden name="id" value="<?= $productos['id_prod'] ?>">
                    <label for="exampleInputEmail1">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $productos['nombre_prod'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Marca:</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="<?= $productos['marca_prod'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Categoria:</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" value="<?= $productos['categoria_prod'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Importado:</label>
                    <input type="text" class="form-control" id="importado" name="importado" value="<?= $productos['importado_prod'] ?>" required aria-describedby="emailHelp">

                </div><br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Descripcion:</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $productos['descrip_prod'] ?>" required aria-describedby="emailHelp">

                </div><br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Precio:</label>
                    <input type="text" class="form-control" id="precio" name="precio" value="<?= $productos['precio_prod'] ?>" required aria-describedby="emailHelp">

                </div><br>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>

</body>

</html>