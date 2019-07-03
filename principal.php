<?php include 'conexion.php' ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>REMA INVENTARIO</title>
</head>
                
<body>
    <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <header class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php include 'encabezado.php' ?>
        </header>

        <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title">Bienvenido, 
            

                <?php
                $sel = $conec ->query(" SELECT * FROM usuario");
                if ($var = $sel -> fetch_assoc()) {
                ;?> 
                <strong><?php echo $var['rol'] ?></strong></p><?php } ?>
        </section>
        
        
    <?php require 'menu.php' ?>

        
    </div>
</body>
</html> 