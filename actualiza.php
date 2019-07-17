<?php 
include 'conexion.php';

		$id = $_POST['id'];
		$funcionario = $_POST['funcionario'];
		$cargo = $_POST['cargo'];
		$cedula = $_POST['cedula'];
		$telefono = $_POST['telefono'];
		$piso = $_POST['piso'];
		$dependencia = $_POST['dependencia'];
		$marca1 = $_POST['marca1'];
		$serie1 = $_POST['serie1'];
		$mac = $_POST['mac'];
		$marca2 = $_POST['marca2'];
		$serie2 = $_POST['serie2'];
		$marca3 = $_POST['marca3'];
		$serie3 = $_POST['serie3'];
		$marca4 = $_POST['marca4'];
		$serie4 = $_POST['serie4'];
		$cargador = $_POST['cargador'];
		$usuario = $_POST['usuario'];

$ac = $conec -> query("UPDATE inventario_pc SET 
				funcionario='$funcionario',
				cargo='$cargo',
				cedula='$cedula', 
				telefono='$telefono', 
				piso='$piso', 
				dependencia='$dependencia', 
				marca1='$marca1', 
				serie1='$serie1', 
				mac='$mac', 
				marca2='$marca2', 
				serie2='$serie2', 
				marca3='$marca3', 
				serie3='$serie3', 
				marca4='$marca4', 
				serie4='$serie4', 
				cargador='$cargador', 
				usuario='$usuario' 
				WHERE id = '$id'");

if ($ac) {
	echo "<script>
	location.href='inventario.php';
	</script>";
}else{
	echo "<script>
	location.href='actualizacion.php?id=".$id."';
	</script>";
}

?>