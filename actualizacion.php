<?php include 'conexion.php';


$id = $_REQUEST['id'];

$sel = $conec -> query("SELECT * FROM inventarioo WHERE id = '$id'");

if ($fila = $sel -> fetch_assoc()) {
}

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

		<section>
		<form action="actualiza.php" method="post">

		<input type="hidden" name="id" value="<?php echo $id ?>">
		<input type="tex" name="funcionario" placeholder="Nombre del Funcionario" value="<?php echo $fila['funcionario'] ?>"><br>
		<input type="tex" name="cargo" placeholder="Cargo del Funcionario" value="<?php echo $fila['cargo'] ?>"><br>
		<input type="tex" name="cedula" placeholder="Numero de Cedula" value="<?php echo $fila['cedula'] ?>"><br>
		<input type="tex" name="telefono" placeholder="Numero de Telefono" value="<?php echo $fila['telefono'] ?>"><br>
		<input type="tex" name="piso" placeholder="Piso" value="<?php echo $fila['piso'] ?>"><br>
		<input type="tex" name="dependencia" placeholder="Introduzca la Dependencia" value="<?php echo $fila['dependencia'] ?>"><br>
		<input type="tex" name="marca1" placeholder="Marca del PC" value="<?php echo $fila['marca1'] ?>"><br>
		<input type="tex" name="serie1" placeholder="Serial del PC" value="<?php echo $fila['serie1'] ?>"><br>
		<input type="tex" name="mac" placeholder="Direccion Fisica del PC" value="<?php echo $fila['mac'] ?>"><br>
		<input type="tex" name="marca2" placeholder="Marca del Monitor" value="<?php echo $fila['marca2'] ?>"><br>
		<input type="tex" name="serie2" placeholder="Serial del Monitor" value="<?php echo $fila['serie2'] ?>"><br>
		<input type="tex" name="marca3" placeholder="Marca del Teclado" value="<?php echo $fila['marca3'] ?>"><br>
		<input type="tex" name="serie3" placeholder="Serial del Teclado" value="<?php echo $fila['serie3'] ?>"><br>
		<input type="tex" name="marca4" placeholder="Marca del Mouse" value="<?php echo $fila['marca4'] ?>"><br>
		<input type="tex" name="serie4" placeholder="Serial del Mouse" value="<?php echo $fila['serie4'] ?>"><br>
		<input type="tex" name="cargador" placeholder="Serial del cargador o regulador de corriente" value="<?php echo $fila['cargador'] ?>"><br>
		<input type="tex" name="usuario" placeholder="Nombre de USUARIO" value="<?php echo $fila['usuario'] ?>"><br>

		<input type="submit" value="Enviar Actualizacion">

	</form>
		

    <?php require 'menu.php' ?>


	</section>

    </div>
	
</body>
</html>




