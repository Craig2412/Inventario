<?php include 'conexion.php'?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inventario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php include 
            'encabezado.php';	
            
            $busqueda = strtolower($_REQUEST['busqueda']);

            if(empty($busqueda)){
                echo    "<script> location.href='inventario.php'; </script>";
            }
            
            
        
        ?>
    
    <form action="buscador.php" method="get"class="form-busqueda">
        <input class="balloon buscador" type="text" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda; ?>">
        <input class="boton boton-buscador" type="submit" value="Buscar">
    </form>

        <div id="slider-container">
                  
            <section >
                <div id="slider-box">                    
                            
<!-- Cuadro -->
                                <table border="0" width="100%" align="center" >
                                    <th align="center">ID</th>
                                    <th align="center">Funcionario</th>
                                    <th align="center">Usuario</th>
                                    <th align="center">Cargo</th>
                                    <th align="center">Cedula</th>
                                    <th align="center">Telefono</th>
                                    <th align="center">Piso</th>
                                    <th align="center">Dependencia</th>
                                    <th align="center">Marca PC</th>
                                    <th align="center">Serial PC</th>
                                    <th align="center">Mac Adrees</th>
                                    <th align="center">Marca Monitor</th>
                                    <th align="center">Serial Monitor</th>                                 
                                    <th align="center">Marca Teclado</th>
                                    <th align="center">Serial Teclado</th>
                                    <th align="center">Marca Mouse</th>
                                    <th align="center">Serial Mouse</th>
                                    <th align="center">S/Corriente</th>
                                    <th colspan="2"</th>
                                    
                                
                                    <?php
                                        $sel = $conec -> query(" SELECT * FROM inventarioo WHERE (id         LIKE '%$busqueda%' OR
                                                                                                 funcionario LIKE '%$busqueda%' OR
                                                                                                 usuario     LIKE '%$busqueda%' OR
                                                                                                 cargo       LIKE '%$busqueda%' OR
                                                                                                 cedula      LIKE '%$busqueda%' OR
                                                                                                 telefono    LIKE '%$busqueda%' OR
                                                                                                 piso        LIKE '%$busqueda%' OR
                                                                                                 dependencia LIKE '%$busqueda%' OR
                                                                                                 marca1      LIKE '%$busqueda%' OR
                                                                                                 serie1      LIKE '%$busqueda%' OR
                                                                                                 mac         LIKE '%$busqueda%' OR
                                                                                                 marca2      LIKE '%$busqueda%' OR
                                                                                                 serie2      LIKE '%$busqueda%' OR
                                                                                                 marca3      LIKE '%$busqueda%' OR
                                                                                                 serie3      LIKE '%$busqueda%' OR
                                                                                                 marca4      LIKE '%$busqueda%' OR
                                                                                                 serie4      LIKE '%$busqueda%' OR
                                                                                                 cargador    LIKE '%$busqueda%' ) 
                                                                                                 ORDER BY id ASC");
                                        while ($fila = $sel -> fetch_assoc()) {
                                        ?>
                                        <tr align="center">
                                            <td><?php echo $fila['id'] ?></td>
                                            <td><?php echo $fila['funcionario'] ?></td>
                                            <td><?php echo $fila['usuario'] ?></td>
                                            <td><?php echo $fila['cargo'] ?></td>
                                            <td><?php echo $fila['cedula'] ?></td>
                                            <td><?php echo $fila['telefono'] ?></td>
                                            <td><?php echo $fila['piso'] ?></td>
                                            <td ><?php echo $fila['dependencia'] ?></td>
                                            <td><?php echo $fila['marca1'] ?></td>
                                            <td><?php echo $fila['serie1'] ?></td>
                                            <td><?php echo $fila['mac'] ?></td>
                                            <td><?php echo $fila['marca2'] ?></td>
                                            <td><?php echo $fila['id'] ?></td>                                                 
                                            <td><?php echo $fila['serie2'] ?></td>                                              
                                            <td><?php echo $fila['marca3'] ?></td>
                                            <td><?php echo $fila['serie3'] ?></td>
                                            <td><?php echo $fila['marca4'] ?></td>
                                            <td><?php echo $fila['serie4'] ?></td>
                                            <td><?php echo $fila['cargador'] ?></td>
                                            <td ><a class="boton boton-invent" href="actualizacion.php?id=<?php echo $fila['id'] ?>">Editar</a>
                                            <a class="boton boton-invent" href="borrar.php?id=<?php echo $fila['id'] ?>">ELIMINAR</a></td>
                                        </tr>
                                    <?php } ?>

                                </table>
                </div>                         
            </section>            
        </div>
    </body>
</html>