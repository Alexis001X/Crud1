<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<?php
    echo view("templates/navbar");
     ?>
<body>
    <div class="container"><br> <br>
        <div class="container-fluid">
            <h1>Agregar nuevos clientes:</h1>
            <form action="insertarc" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombres:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required aria-describedby="emailHelp" placeholder="Nombres completos">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Apellidos:</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required aria-describedby="emailHelp" placeholder="Apellidos completos">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Cedula:</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" required aria-describedby="emailHelp" placeholder="Cedula de identidad">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Telefono:</label>
                    <input type="Boolean" class="form-control" id="telefono" name="telefono" required aria-describedby="emailHelp" placeholder="Telefono celular o convencional">

                </div><br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo electronioc:</label>
                    <input type="text" class="form-control" id="correo" name="correo" required aria-describedby="emailHelp" placeholder="Correo electronico(hotmail,gmail,etc)">

                </div><br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Socio:</label>
                    <input type="text" class="form-control" id="socio" name="socio" required aria-describedby="emailHelp" placeholder="¿Es socio? 1 = si 0 = no">

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