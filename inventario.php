<?php 
include 'conexion.php';
require 'funciones.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inventario 1</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
		<?php include 'encabezado.php'	?>
        <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <form action="buscador.php" method="get" class="form-busqueda">
                <input class="balloon buscador" type="text" name="busqueda" id="busqueda" placeholder="Buscar">
                <input class="boton boton-buscador" type="submit" value="Buscar">
            </form>

                <div id="page">
                
                    <section>
                        <input type="radio" name="slider-select-element" id="element1" checked="checked" />
                        <input type="radio" name="slider-select-element" id="element2" />
                        <input type="radio" name="slider-select-element" id="element3" />
                        
                        <div id="slider-container" class="text">
                            <div id="slider-box">
                                <div class="slider-element">
                                    <article class="element-red">
        <!-- Primer Cuadro -->
                                        <table  align="center">
                                            <thead>
                                                <th align="center">ID</th>
                                                <th align="center">Asignacion</th>
                                                <th align="center">Funcionario</th>
                                                <th align="center">Usuario</th>
                                                <th align="center">Cargo</th>
                                                <th align="center">Cedula</th>
                                                <th align="center">Telefono</th>
                                                
                                            </thead>
                                        
                                            <?php
                                                $sel = $conec ->query(" SELECT `inventario_pc`.*, `asignacion`.`asignacion`, `cargo`.`cargo`
                                                FROM `inventario_pc` 
                                                    LEFT JOIN `asignacion` ON `inventario_pc`.`id_asignacion` = `asignacion`.`id_asignacion` 
                                                    LEFT JOIN `cargo` ON `inventario_pc`.`id_cargo` = `cargo`.`id_cargo`;");
                                                while ($fila = $sel -> fetch_assoc()) {
                                                ?>
                                                <tr align="center">
                                                    <td><?php echo $fila['id'] ?></td>
                                                    <td><?php echo asignacion($fila['asignacion'])?></td>
                                                    <td><?php echo utf8_encode($fila['funcionario'])?></td>
                                                    <td><?php echo utf8_encode($fila['usuario'])?></td>
                                                    <td><?php echo utf8_encode($fila['cargo']) ?></td>
                                                    <td><?php echo $fila['cedula'] ?></td>
                                                    <td><?php echo $fila['telefono'] ?></td>
                                                    
                                                </tr>
                                            <?php } ?>

                                        </table>

                                    </article>
                                </div>
                                <div class="slider-element">
                                    <article class="element-green">
        <!-- Segundo Cuadro -->
                                        <table  align="center">
                                            <th align="center">Piso</th>
                                            <th align="center">Dependencia</th>
                                            <th align="center">Marca PC</th>
                                            <th align="center">Serial PC</th>
                                            <th align="center">Mac Adrees</th>
                                            <th align="center">Marca Monitor</th>
                                    
                                            <?php
                                                $sel = $conec ->query("SELECT `inventario_pc`.*, `dependencia`.`dependencia`
                                                FROM `inventario_pc` 
                                                    LEFT JOIN `dependencia` ON `inventario_pc`.`id_dependencia` = `dependencia`.`id_dependencia`; ");
                                                while ($fila = $sel -> fetch_assoc()) {
                                                ?>
                                                <tr align="center">
                                                    <td><?php echo $fila['piso'] ?></td>
                                                    <td class="filita"><?php echo $fila['dependencia'] ?></td>
                                                    <td><?php echo $fila['marca1'] ?></td>
                                                    <td><?php echo $fila['serie1'] ?></td>
                                                    <td><?php echo $fila['mac'] ?></td>
                                                    <td><?php echo $fila['marca2'] ?></td>
                                                    
                                                </tr>
                                            <?php } ?>  

                                        </table>
                                        
                                    </article>
                                </div>
                                <div class="slider-element">
                                    <article class="element-blue">
        <!-- Tercer Cuadro -->
                                        <table  align="center">   
                                            <th align="center">Serial Monitor</th>                                 
                                            <th align="center">Marca Teclado</th>
                                            <th align="center">Serial Teclado</th>
                                            <th align="center">Marca Mouse</th>
                                            <th align="center">Serial Mouse</th>
                                            <th align="center">S/Corriente</th>
                                            <th colspan="2"></th>
                                            

                                            <?php
                                                    $sel = $conec ->query(" SELECT * FROM inventario_pc ");
                                                    while ($fila = $sel -> fetch_assoc()) {
                                                    ?>
                                                    <tr align="center">                                                  
                                                        <td><?php echo $fila['serie2'] ?></td>                                              
                                                        <td><?php echo $fila['marca3'] ?></td>
                                                        <td><?php echo $fila['serie3'] ?></td>
                                                        <td><?php echo $fila['marca4'] ?></td>
                                                        <td><?php echo $fila['serie4'] ?></td>
                                                        <td><?php echo $fila['cargador'] ?></td>
                                                        <td  class="botones">
                                                            <a class="boton boton-invent" href="actualizacion.php?id=<?php echo $fila['id'] ?>">Editar</a>
                                                            <a class="boton boton-invent" href="borrar.php?id=<?php echo $fila['id'] ?>">Eliminar</a>
                                                            <a class="boton boton-invent" href="reporte.php?id=<?php echo $fila['id'] ?>">Reporte</a>
                                                                                                                   </td>
                                                    </tr>
                                            <?php } ?>

                                        </table>
                                        
                                    </article>                            
                                </div>
                            </div>
                        </div>
                        
                        <div id="slider-arrows">
                            <label for="element1"></label>
                            <label for="element2"></label>
                            <label for="element3"></label>
                        </div>
                    </section> 
                    <script src="btn.js"></script>           
                </div>


    <?php require 'menu.php' ?>
                                                        
         
                    
    </body>
</html>