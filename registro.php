<?php
$asignacion = $_REQUEST['select'];
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
			<h1 class="title ti-registro">Registro</h1>

			<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xf-12">
				<span>
					<input class="balloon indent" id="Funcionario" type="text" name="funcionario" autocomplete="nos" required/><label class="label" for="Funcionario">Nombre</label>
				</span>
				<span>
					<input class="balloon indent" id="asignacion" type="text" name="asignacion" value="<?php echo $asignacion ?>" readonly/><label class="label" for="asignacion">Asignacion</label>
				</span>
				<span>
                    <select class="balloon indent" id="Cargo" type="text" name="cargo"  />Cargo<label class="label" for="Cargo">Cargo</label>
                        <option value="Director de Linea">Director de Linea</option>
                        <option value="Coordinador">Coordinador</option>                        
                        <option value="Consultor Juridico">Consultor Juridico</option>
                        
                    </select>
				</span>
				<span>
					<input class="balloon indent" id="Cedula" type="text" name="cedula"  /><label class="label" for="Cedula">Cedula</label>
				</span>
				<span>
					<input class="balloon indent" id="Telefono" type="text" name="telefono"  /><label class="label" for="Telefono">Telefono</label>
				</span>
				<span>
					<select class="balloon indent" id="Piso" type="text" name="piso" /><label class="label" for="Piso">Piso</label>
                        <option value="PB">PB</option>
                        <option value="P1"></option>
                        <option value="P2"></option>
                        <option value="P3"></option>
                    </select>
                </span>
				<span>
					<input class="balloon indent" id="Dependencia" type="text" name="dependencia" /><label class="label" for="Dependencia">Dependencia</label>
				</span>
				<span>
					<input class="balloon indent" id="Marca1" type="text" name="marca1" /><label class="label" for="Marca1">Marca de PC</label>
				</span>
				<span>
					<input class="balloon indent" id="Serie1" type="text" name="serie1" /><label class="label" for="Serie1">Serial del PC</label>
				</span>
				<span>
					<input class="balloon indent" id="Mac" type="text" name="mac" /><label class="label" for="Mac">MAC</label>
				</span>
				<span>
					<input class="balloon indent" id="Marca2" type="text" name="marca2"  /><label class="label" for="Marca2">Marca del Monitor</label>
				</span>
				<span>
					<input class="balloon indent" id="Serie2" type="text" name="serie2"  /><label class="label" for="Serie2">Serial del Monitor</label>
				</span>
				<span>
					<input class="balloon indent" id="Marca3" type="text" name="marca3"  /><label class="label" for="Marca3">Marca del Teclado</label>
				</span>
				<span>
					<input class="balloon indent" id="Serie3" type="text" name="serie3"  /><label class="label" for="Serie3">Serial del Teclado</label>
				</span>
				<span>
					<input class="balloon indent" id="Marca4" type="text" name="marca4"  /><label class="label" for="Marca4">Marca del Mouse</label>
				</span>
				<span>
					<input class="balloon indent" id="Serie4" type="text" name="serie4"  /><label class="label" for="Serie4">Serial del Mouse</label>
				</span>
				<span>
					<input class="balloon indent" id="Cargador" type="text" name="cargador"  /><label class="label" for="Cargador">S/Corriente</label>
				</span>
				<span>
					<input class="balloon indent" id="Usuario" type="text" name="usuario"  /><label class="label" for="Usuario">Nombre de Usuario</label>
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
