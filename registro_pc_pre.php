<!DOCTYPE html>
<html>
<head>
	<title>Login Inventario</title>
	<meta charset="utf-8">
	<?php include 'enlaces.php' ?>
</head>
<body>

	<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php include 'encabezado.php' ?>

		<section class="login registro col-lg-3 col-md-7 col-sm-12 col-xs-12 col-xf-12">
		<form class="form col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xf-12" action="direccionamiento.php" method="post">
            <section class="container-checkbox">
            <div>
                <input type="checkbox" id="control_01" name="select" value="Asignado">
                <label for="control_01" class="label-checkbox">
                    <h2>Asignado</h2>
                    <p>Selecione si el PC esta asignado a algun funcionario</p>
                </label>
                </div>
            </section>
            <div class="submit-reset submit-checkbox">
				<input class="boton submit-registro col-lg-12" type="submit" value="Enviar Registro" name="enviar">
		</div>
	</form>
		



	</section>

    <?php
    require 'menu.php'
    ?>
	
</body>
</html>