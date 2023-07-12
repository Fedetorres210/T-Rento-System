<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web</title>

    <link rel= "stylesheet" href="./css/tRentoDesign.css"/>


</head>
<body>
    <?php $url= "http://".$_SERVER['HTTP_HOST']."/sitioweb/administrador"?>

    <header class="header-principal">
    <a class = "header-principal-a1" href=""<?php echo $url;?>/inicio.php""> 
        
        <h2 class= "nombre-empresa"> TeRento </h2>
    </a>
    <nav class = "br-nav-1">

        <ul class="menuPrincipal" >
            <li>
                <a href="<?php echo $url;?>/inicio.php">Inicio</a>
            </li>
        
            
            <li >
                <a  href="<?php echo $url;?>/vehiculos/vehiculos.php">Vehículos</a>
                
            </li>

            <li ">
                <a  href="<?php echo $url;?>/conductores.php">Conductores</a>
            </li>

            <li >
                <a  href="<?php echo $url;?>/pagos.php">Pagos</a>
            </li>

            <li >
                <a  href="<?php echo $url;?>/cerrar.php">Cerrar Sesion</a>
            </li>

        </ul>
    </nav>


    
</header>





    
    
    