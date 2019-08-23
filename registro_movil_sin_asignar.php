<?php 
$select = $_REQUEST['select'];

?>

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

		<section class="login registro col-lg-6 col-md-7 col-sm-12 col-xs-12 col-xf-12">
		<form class="form col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xf-12" action="proceso.php" method="post">
			<img class="icon-account icon-registro" src="img/registro.png" alt="">
			<h1 class="title ti-registro">Registro Movil SIN Asignacion</h1>

			<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xf-12">
				<span>
					<input class="balloon indent" id="Asignacion" type="text" name="asignacion"  value="<?php echo $select ?>" readonly/><label class="label" for="Asignacion">Asignacion</label>
				</span>
				<span>
					<input class="balloon indent" id="Equipo" type="text" name="equipo" autocomplete="nos" value="MOVIL" readonly /><label class="label" for="Equipo">Tipo de Equipo</label>
				</span>

				<span>
                    <select class="balloon indent" id="Cargo" type="text" name="cargo"  />Cargo<label class="label" for="Cargo" readonly>Cargo</label>
                        <option value="0">N/A</option>
                    </select>
				</span>

				<span>
					<select class="balloon indent" id="Piso" type="text" name="piso" /><label class="label" for="Piso">Piso</label>
                        <option value="0">N/A</option>
                    </select>
				</span>

				<span>
                    <select class="balloon indent" id="Dependencia" type="text" name="dependencia" readonly >Dependencia<label class="label" for="Dependencia">Dependencia</label>
                        <option value="0">N/A</option>
                    </select>
				</span>
				<span>
					<input class="balloon indent" id="Marca1" type="text" name="marca1" /><label class="label" for="Marca_movil">Marca de Movil</label>
				</span>
				<span>
					<input class="balloon indent" id="Serie1" type="text" name="serie1" /><label class="label" for="Serie_movil">Serial del Movil</label>
				</span>
				<span>
					<input class="balloon indent" id="Mac" type="text" name="mac" /><label class="label" for="IMEI">IMEI</label>
				</span>
				<span>
					<input class="balloon indent" id="Marca2" type="text" name="marca2"  /><label class="label" for="Nro">Numero Del Telefono Asignado</label>
				</span>
				
			</div>

			<div class="submit-reset">
				<input class="boton submit-registro" type="submit" value="Enviar Registro">
				<input class="boton reset" type="reset" value="Iniciar de nuevo">
		</div>
	</form>
		



	</section>

    <?php
    require 'menu.php'
    ?>
	
</body>
</html>
