<?php 
require 'funciones.php';
if (!empty($_GET)) {
$Nombre_tabla = $_GET['Nombre_tabla'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Inventario</title>
    <meta charset="utf-8">
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
	<?php include 'enlaces.php' ?>
</head>
<body>

	<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php include 'encabezado.php' ?>

		<section class="login registro col-lg-3 col-md-7 col-sm-12 col-xs-12 col-xf-12">
		<form class="form col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xf-12" action="direccionamiento.php" method="post">
            <section class="container-checkbox">
            <div>
                <input type="checkbox" id="control_01" name="select" value="1">
                <label for="control_01" class="label-checkbox">
                    <h2>Asignado</h2>
                    <p class="flechita">Selecione si el activo esta asignado a algun funcionario</p>
                </label>
                <input type="text" name="Nombre_tabla" id="" class="input-tabla" readonly value="<?php echo $Nombre_tabla ?>">
                </div>
            </section>
            <div class="submit-reset submit-checkbox">
				<input class="boton submit-registro  selection col-lg-12" type="submit" value="Enviar Registro" name="enviar">
		</div>
	</form>
		



	</section>

    <?php
    require 'menu.php'
    ?>
	
</body>
</html>