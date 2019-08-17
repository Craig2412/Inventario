<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>






	<?php 

	include 'conexion.php';
	require 'funciones.php';
		$asignacion =$_POST['asignacion'] + 0 ; //este cero no tiene sentido, arreglalo
		$funcionario = $_POST['funcionario'] ?? 'N/A';
		$cargo = $_POST['cargo'] + 0;
		$cedula = $_POST['cedula']?? 'N/A';
		$telefono = $_POST['telefono'] ?? 'N/A';
		$piso = $_POST['piso'];
		$dependencia = $_POST['dependencia'] + 0;
		$marca1 = $_POST['marca1'] ?? 'N/A';
		$serie1 = $_POST['serie1'] ?? 'N/A';
		$mac = $_POST['mac'];
		$marca2 = $_POST['marca2'] ?? 'N/A';
		$serie2 = $_POST['serie2'] ?? 'N/A';
		$marca3 = $_POST['marca3'] ?? 'N/A';
		$serie3 = $_POST['serie3'] ?? 'N/A';
		$marca4 = $_POST['marca4'] ?? 'N/A';
		$serie4 = $_POST['serie4'] ?? 'N/A';
		$cargador = $_POST['cargador'] ?? 'N/A';
		$usuario = $_POST['usuario'] ?? 'N/A';
		$equipo = $_POST['equipo'];
		$id= generador($equipo);

	$inc = $conec -> query("INSERT INTO inventario_pc
										(id,id_asignacion,funcionario,id_cargo,cedula,telefono,piso,id_dependencia,marca1,serie1,mac,marca2,serie2,marca3,serie3,marca4,serie4,cargador,usuario)
							VALUES ('$id','$asignacion','$funcionario','$cargo','$cedula','$telefono','$piso','$dependencia','$marca1','$serie1','$mac','$marca2','$serie2','$marca3','$serie3','$marca4','$serie4','$cargador','$usuario')");

	if ($inc) {
			echo "Se ha completado el registro";
			echo 
			"<script>
			location.href='registro.php';
			</script>";
		}else{
			var_dump($inc);
			echo "ERROR";

		}

	?>






</h1></center>
</body>
</html>
