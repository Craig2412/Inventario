<?php include 'conexion.php';
$p="P-";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inventario 1</title>
        <meta charset="UTF-8">
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
                                        <table border="1px" width="100%" align="center">
                                            <th align="center">ID</th>
                                            <th align="center">Funcionario</th>
                                            <th align="center">Usuario</th>
                                            <th align="center">Cargo</th>
                                            <th align="center">Cedula</th>
                                            <th align="center">Telefono</th>
                                            <th align="center">Piso</th>
                                        
                                            <?php
                                                $sel = $conec ->query(" SELECT * FROM inventarioo ");
                                                while ($fila = $sel -> fetch_assoc()) {
                                                ?>
                                                <tr align="center">
                                                    <td><?php echo $p . $fila['id'] ?></td>
                                                    <td><?php echo $fila['funcionario'] ?></td>
                                                    <td><?php echo $fila['usuario'] ?></td>
                                                    <td><?php echo $fila['cargo'] ?></td>
                                                    <td><?php echo $fila['cedula'] ?></td>
                                                    <td><?php echo $fila['telefono'] ?></td>
                                                    <td><?php echo $fila['piso'] ?></td>
                                                </tr>
                                            <?php } ?>

                                        </table>

                                    </article>
                                </div>
                                <div class="slider-element">
                                    <article class="element-green">
        <!-- Segundo Cuadro -->
                                        <table border="1px" width="100%" align="center">
                                            <th align="center">Dependencia</th>
                                            <th align="center">Marca PC</th>
                                            <th align="center">Serial PC</th>
                                            <th align="center">Mac Adrees</th>
                                            <th align="center">Marca Monitor</th>
                                    
                                            <?php
                                                $sel = $conec ->query(" SELECT * FROM inventarioo ");
                                                while ($fila = $sel -> fetch_assoc()) {
                                                ?>
                                                <tr align="center">
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
                                        <table border="1px" width="100%" align="center">   
                                            <th align="center">Serial Monitor</th>                                 
                                            <th align="center">Marca Teclado</th>
                                            <th align="center">Serial Teclado</th>
                                            <th align="center">Marca Mouse</th>
                                            <th align="center">Serial Mouse</th>
                                            <th align="center">S/Corriente</th>
                                            <th colspan="2"></th>
                                            

                                            <?php
                                                    $sel = $conec ->query(" SELECT * FROM inventarioo ");
                                                    while ($fila = $sel -> fetch_assoc()) {
                                                    ?>
                                                    <tr align="center">                                                  
                                                        <td><?php echo $fila['serie2'] ?></td>                                              
                                                        <td><?php echo $fila['marca3'] ?></td>
                                                        <td><?php echo $fila['serie3'] ?></td>
                                                        <td><?php echo $fila['marca4'] ?></td>
                                                        <td><?php echo $fila['serie4'] ?></td>
                                                        <td><?php echo $fila['cargador'] ?></td>
                                                        <td >
                                                            <a href="actualizacion.php?id=<?php echo $fila['id'] ?>">Editar</a>
                                                            <a href="borrar.php?id=<?php echo $fila['id'] ?>">Eliminar</a>
                                                            <a href="reporte.php?id=<?php echo $fila['id'] ?>">Reporte</a>
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
                </div>


                <div class="menu-wrapper">
                    
                    <input type="checkbox" id="myml-menu-toggle"/>
                    
                        <nav class="myml-nav" role="complementary">
                            <div class="myml-nav__container">
                                <section class="myml-nav__section myml-nav__section--toggle">
                                    <div class="myml-nav__section-heading">
                                        <span class="myml-nav__section-icon">
                                            <label class="myml-nav__toggle" for="myml-menu-toggle">
                                                <svg viewBox="0 0 512 512">
                                                <path d="M491.318,235.318H20.682C9.26,235.318,0,244.577,0,256s9.26,20.682,20.682,20.682h470.636
                                                    c11.423,0,20.682-9.259,20.682-20.682C512,244.578,502.741,235.318,491.318,235.318z"/>
                                            
                                                <path d="M491.318,78.439H20.682C9.26,78.439,0,87.699,0,99.121c0,11.422,9.26,20.682,20.682,20.682h470.636
                                                    c11.423,0,20.682-9.26,20.682-20.682C512,87.699,502.741,78.439,491.318,78.439z"/>
                                            
                                                <path d="M491.318,392.197H20.682C9.26,392.197,0,401.456,0,412.879s9.26,20.682,20.682,20.682h470.636
                                                    c11.423,0,20.682-9.259,20.682-20.682S502.741,392.197,491.318,392.197z"/>
                                            </label>  
                                        </span>
                                        <p class="myml-nav__section-title">
                                            <span class="myml-nav__user-permalink">REAM&#8482;</span>
                                            <span class="myml-nav__section-subtitle"></span>
                                        </p>
                                    </div>
                                </section>

                                <div class="myml-nav__menu">
                                    <section class="myml-nav__section  ">
                                        <a href="principal.php" class="myml-nav__section-heading">
                                        <span class="myml-nav__section-icon myml-nav__section-icon--myml_summary">

                                        <img class="icon-menu" src="img/house.png" alt="">        

                                        </span>
                                <p class="myml-nav__section-title">Inicio</p>
                                </a>
                            
                            </section>

                            
                            <section class="myml-nav__section myml-nav__section--active">
                                
                                <input type="checkbox" class="myml-nav__section-toggle-trigger" id="myml-menu-section-toggle-my_purchases" checked="" readonly=""/>
                                
                                <span class="myml-nav__section-heading myml-nav__section-heading--has-items">
                                    
                                    <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_purchases">

                                            <img class="icon-menu" src="img/boxes.png" alt="">

                                        </label>
                                        
                                    <label for="myml-menu-section-toggle-my_purchases" class="myml-nav__section-title">Inventario</label>
                                    
                                </span>
                                
                                <div class="myml-nav__section-list">
                                    
                                    <a class="myml-nav__menu-item" href="inventario.php" ">
                                        <span class="myml-nav__menu-item-text">Movil</span>
                                    </a>
                                    
                                    <a class="myml-nav__menu-item" href="#" >
                                        <span class="myml-nav__menu-item-text">PC</span>
                                    </a>

                                    <a class="myml-nav__menu-item" href="#">
                                        <span class="myml-nav__menu-item-text">Laptop</span>
                                    </a>

                                </div>
                            </section>
                    
                    
                    
                    <section class="myml-nav__section  myml-nav__section--has-active-item">

                        <input type="checkbox" class="myml-nav__section-toggle-trigger" id="myml-menu-section-toggle-my_sales"/>
                        
                        <span class="myml-nav__section-heading myml-nav__section-heading--has-items">
                            
                            <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_sales">

                            <img class="icon-menu" src="img/notes.png" alt="">
                            
                            </label>
                            
                            <label for="myml-menu-section-toggle-my_sales" class="myml-nav__section-title">Registro</label>
                            
                            </span>
                        
                        <div class="myml-nav__section-list">

                            <a class="myml-nav__menu-item" href="registro.php">
                                <span class="myml-nav__menu-item-text">PC</span>
                                </a>

                                <a class="myml-nav__menu-item" href="#">
                                    <span class="myml-nav__menu-item-text">Movil</span>
                                </a>

                                <a class="myml-nav__menu-item" href="#">
                                    <span class="myml-nav__menu-item-text">Laptop</span>
                                </a>

                                <a class="myml-nav__menu-item" href="#"><span class="myml-nav__menu-item-text">Impresora</span></a></div></section>

                        
                        <section class="myml-nav__section  ">
                            <a href="salir.php" class="myml-nav__section-heading">
                            <span class="myml-nav__section-icon myml-nav__section-icon--myml_summary">

                                <img class="icon-menu rotate" src="img/logout.png" alt="">

                            </span>
                    <p class="myml-nav__section-title">Salir</p>
                    </a>

                </section>

                    </div>
                </div>
                </nav>
            <label class="myml-nav__overlay" for="myml-menu-toggle"></label>
            </div>

        </div>
           
         
                    
    </body>
</html>