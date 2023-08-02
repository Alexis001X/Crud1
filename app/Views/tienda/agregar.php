<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<?php
    echo view("templates/navbar");
     ?>
<body>
    <div class="container"><br> <br>
        <div class="container-fluid">
            <h1>Agregar nuevo producto:</h1>
            <form action="insertar" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required aria-describedby="emailHelp" placeholder="Nombre del producto">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Marca:</label>
                    <input type="text" class="form-control" id="marca" name="marca" required aria-describedby="emailHelp" placeholder="LG, Sony, Indurama, Etc">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Categoria:</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" required aria-describedby="emailHelp" placeholder="Jardin, Linea Blanca, Ejercicio, Etc">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Importado:</label>
                    <input type="Boolean" class="form-control" id="importado" name="importado" required aria-describedby="emailHelp" placeholder="Indica si se trata de un producto importado Si o No">

                </div><br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Descripcion del producto:</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required aria-describedby="emailHelp" placeholder="Detalla la funcionalidad del producto">

                </div><br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Precio por unidad:</label>
                    <input type="text" class="form-control" id="precio" name="precio" required aria-describedby="emailHelp" placeholder="Establece el costo individual del producto">

                </div><br>



                <button type="submit" class="btn btn-success">Agregar registro</button>
            </form>
        </div>
    </div>
    <br>
    <br>
    <?php
    echo view("templates/footer");
     ?>
</body>

</html>