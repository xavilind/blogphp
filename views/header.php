<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">
    <title>Blog Alex</title>
</head>

<body>
    <header>
      <div class="contenedor">
        <div class="logo izquierda">
          <p><a href="<?php echo RUTA; ?>">Mi primer blog</a></p>
        </div>

        <div class="derecha">
          <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
            <input type="text" name="busqueda" placeholder="Buscar">
            <button type="submit" class="icono fa fa-search"></button>
          </form>

          <nav class="menu">
             <ul>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#">Contacto<i class="icono fa fa-envelope"></i></a></li>
             </ul>
          </nav>
        </div>
      </div>
    </header>