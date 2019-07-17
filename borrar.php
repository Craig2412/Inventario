<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<center><h1>
	


		<?php 

include 'conexion.php';

$id = $_REQUEST['id'];


$el = $conec -> query("DELETE FROM inventario_pc WHERE id = '$id'");

if ($el) {
	echo "El registro ha sido eliminado";
	echo "<script>
	location.href='inventario.php';
	</script>";
}else
echo "<script>
	alert('El campo no se ha podido eliminar')
	location.href='inventario.php';
	</script>";

 ?>







	</h1></center>

</body>
</html>