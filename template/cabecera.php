<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web</title>

    <link rel= "stylesheet" href= "./css/bootstrap.css" />
</head>
<body>
    <?php $url= "http://".$_SERVER['HTTP_HOST']."/sitioweb"?>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">TeRento </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="vehiculos.php">Vehiculos</a>
                
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Seguridad</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="nosotros.php">Nosotros</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url;?>/administrador/index.php">Iniciar Sesion</a>
            </li>
            

        </ul>
    </nav>
    <div class="container">
    <br/>
        <div class = "row">