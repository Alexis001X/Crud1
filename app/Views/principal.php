<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina principal - DevStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
    <style>
        /* Estilos para el carrusel */
        .carousel-item {
            height: 550px;
        }
        /* Estilos para las cajas */
        .box {
            text-align: center;
            padding: 20px;
            border-color: black;
            border-style:ridge;
            border-radius: 14px;
        }
        /* Estilos para el pie de página */
        footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }
        .img-container {
        width: 150px; /* Ajusta el tamaño según tus necesidades */
        height: 150px; /* Ajusta el tamaño según tus necesidades */
        overflow: hidden;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .circle-img {
       width: 100%;
       height: 100%;
       object-fit: cover;  
      }

    </style>
  </head>
  
  <body>
        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">DevStore</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ofertas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lanzamientos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Premiun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Iniciar sesion</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Carrusel de imágenes -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.pexels.com/photos/853151/pexels-photo-853151.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Imagen 1" height="650px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Compre desde la comodidad de tu hogar</h5>
                    <p>Puedes acceder a nuestra amplia lista de compras desde cualquier parte del mundo y te lo enviamos lo mas pronto posible</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.pexels.com/photos/230544/pexels-photo-230544.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Imagen 2" height="650">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Título de la imagen 2</h5>
                    <p>Descripción de la imagen 2</p>
                </div>
            </div>
            <!-- Agrega más elementos carousel-item según necesites -->
        </div>
    </div>

    <!-- Cajas -->
    <div class="container mt-5">
        <div class="row">
        <div class="col-md-4">
            <div class="box">
               <div class="rounded-circle img-container">
                     <img src="https://images.pexels.com/photos/95916/pexels-photo-95916.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Imagen circular 1" class="circle-img">
        </div>
        <h3>Registro de productos</h3>
        <p>Revisa el estado de los productos, existencia y demas caracteristicas</p>
        <button class="btn btn-warning"><a href="<?= site_url('tienda/lista') ?>">Revisar</button></a>
    </div>
</div>
<div class="col-md-4">
    <div class="box">
        <div class="rounded-circle img-container">
            <img src="https://images.pexels.com/photos/50987/money-card-business-credit-card-50987.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Imagen circular 2" class="circle-img">
        </div>
        <h3>Revision de clientes</h3>
        <p>Revisa y maneja el registro de los clientes y sus compras</p>
        <button class="btn btn-primary">Revisar</button>
    </div>
</div>

<div class="col-md-4">
            <div class="box">
               <div class="rounded-circle img-container">
                     <img src="https://images.pexels.com/photos/1171386/pexels-photo-1171386.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Imagen circular 1" class="circle-img">
        </div>
        <h3>Proximamente</h3>
        <p>Estamos trabajando en esta seccion, pronto estara disponible</p>
        <button class="btn btn-primary">Revisar</button>
    </div>
</div>
        </div>
    </div>
    <br>
    <br>
    <!-- Pie de página -->
    <?php
    echo view("templates/footer");
     ?>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>