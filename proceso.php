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
		echo '<br>' . $asignacion =$_POST['asignacion'] +0  ; //este cero no tiene sentido, arreglalo
		echo '<br>' . $funcionario = $_POST['funcionario'] ?? 'N/A';
		echo '<br>' . $cargo = $_POST['cargo']  + 0;
		echo '<br>' . $cedula = $_POST['cedula']?? 0 ;
		echo '<br>' . $telefono = $_POST['telefono'] ?? 'N/A';
		echo '<br>' . $piso = $_POST['piso'] ?? 0;
		echo '<br>' . $marca1 = $_POST['marca1'] ?? 0;
		echo '<br>' . $dependencia = $_POST['dependencia'] + 0 ;
		echo '<br>' . $serie1 = $_POST['serie1'] ?? 'N/A';
		echo '<br>' . $mac = $_POST['mac'];
		echo '<br>' . $marca2 = $_POST['marca2'] ?? 'N/A';
		echo '<br>' . $serie2 = $_POST['serie2'] ?? 'a';
		echo '<br>' . $marca3 = $_POST['marca3'] ?? 'N/A';
		echo '<br>' . $serie3 = $_POST['serie3'] ?? 'N/A';
		echo '<br>' . $marca4 = $_POST['marca4'] ?? 'N/A';
		echo '<br>' . $serie4 = $_POST['serie4'] ?? 'N/A';
		echo '<br>' . $cargador = $_POST['cargador'] ?? 'N/A';
		echo '<br>' . $usuario = $_POST['usuario'] ?? 'N/A';
		echo '<br>' . $equipo = $_POST['equipo'];
		echo '<br>' . $id= generador($equipo);

	$inc = $conec -> query("INSERT INTO inventario_pc
										(id,id_asignacion,funcionario,id_cargo,cedula,telefono,piso,id_dependencia,marca1,serie1,mac,marca2,serie2,marca3,serie3,marca4,serie4,cargador,usuario) VALUES ('$id','$asignacion','$funcionario','$cargo','$cedula','$telefono','$piso','$dependencia','$marca1','$serie1','$mac','$marca2','$serie2','$marca3','$serie3','$marca4','$serie4','$cargador','$usuario')");

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
