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



    <?php include 'encabezado.php' ?>
    <div class="container-principal col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <header class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        </header>    
        
        <?php
            $sel = $conec ->query(" SELECT `usuario`.`rol`, `rol`.`rol`
            FROM `usuario` 
                LEFT JOIN `rol` ON `usuario`.`rol` = `rol`.`idrol`;");
            if ($var = $sel -> fetch_assoc()) {
            ;?> 
            <?php echo '<div class="rol"><p>Hola ' . $var['rol'] . '</p></div>'?><?php } ?>

            <div class="l-estaditicas-pc col-lg-10">

<div class="c-estadisticas-item">

                <div class="c-container-icon-estadisticas-img">
                <a class="c-link-estadisticas" href="inventario.php">
                <img class="c-estadisticas-img" src="img/gaming.png" alt="">
                </a>
                </div>

                <?php  $result=$conec->query("SELECT count(*) as total from inventario_pc where id_asignacion = 1");
                $count=$result->fetch_assoc();
                echo '<p class="c-date-estadisticas">' . $count['total'] . '</p>';?>
                
                <?php  $result=$conec->query("SELECT count(*) as total from inventario_pc where id_asignacion = 2");
                $count=$result->fetch_assoc();
                echo '<p class="c-date-estadisticas">' . $count['total'] . '</p>';?>
                
                <?php  $result=$conec->query("SELECT count(*) as total from inventario_pc");
                $count=$result->fetch_assoc();
                echo '<p class="c-date-estadisticas">' . $count['total'] . '</p>';?>
</div>

<div class="c-estadisticas-item">

                <div class="c-container-icon-estadisticas-img">
                <a class="c-link-estadisticas" href="">
                <img class="c-estadisticas-img" src="img/laptop.png" alt="">
                </a>
                </div>

                <?php  $result=$conec->query("SELECT count(*) as total from inventario_pc where id_asignacion = 1");
                $count=$result->fetch_assoc();
                echo '<p class="c-date-estadisticas">Asignados: ' . $count['total'] . '</p>';?>
                
                <?php  $result=$conec->query("SELECT count(*) as total from inventario_pc where id_asignacion = 2");
                $count=$result->fetch_assoc();
                echo '<p class="c-date-estadisticas">No Asignados: ' . $count['total'] . '</p>';?>
                
                <?php  $result=$conec->query("SELECT count(*) as total from inventario_pc");
                $count=$result->fetch_assoc();
                echo '<p class="c-date-estadisticas">Total: ' . $count['total'] . '</p>';?>
</div>

<div class="c-estadisticas-item">

                <div class="c-container-icon-estadisticas-img">
                <a class="c-link-estadisticas" href="">
                <img class="c-estadisticas-img" src="img/smartphone.png" alt="">
                </a>
                </div>

                <?php  $result=$conec->query("SELECT count(*) as total from inventario_pc where id_asignacion = 1");
                $count=$result->fetch_assoc();
                echo '<p class="c-date-estadisticas">' . $count['total'] . '</p>';?>
                
                <?php  $result=$conec->query("SELECT count(*) as total from inventario_pc where id_asignacion = 2");
                $count=$result->fetch_assoc();
                echo '<p class="c-date-estadisticas">' . $count['total'] . '</p>';?>
                
                <?php  $result=$conec->query("SELECT count(*) as total from inventario_pc");
                $count=$result->fetch_assoc();
                echo '<p class="c-date-estadisticas">' . $count['total'] . '</p>';?>
</div>

<div class="c-estadisticas-item">

                <div class="c-container-icon-estadisticas-img">
                <a class="c-link-estadisticas" href="">
                <img class="c-estadisticas-img" src="img/printer.png" alt="">
                </a>
                </div>

                <?php  $result=$conec->query("SELECT count(*) as total from inventario_pc where id_asignacion = 1");
                $count=$result->fetch_assoc();
                echo '<p class="c-date-estadisticas">' . $count['total'] . '</p>';?>
                
                <?php  $result=$conec->query("SELECT count(*) as total from inventario_pc where id_asignacion = 2");
                $count=$result->fetch_assoc();
                echo '<p class="c-date-estadisticas">' . $count['total'] . '</p>';?>
                
                <?php  $result=$conec->query("SELECT count(*) as total from inventario_pc");
                $count=$result->fetch_assoc();
                echo '<p class="c-date-estadisticas">' . $count['total'] . '</p>';?>
</div>

        
    </div>
    <?php require 'menu.php' ?>
</body>
</html> 