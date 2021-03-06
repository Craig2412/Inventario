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
					<input class="balloon indent" id="Equipo" type="text" name="equipo" autocomplete="nos" value="MOVIL" readonly /><label class="label" for="Equipo">Tipo de Equipo</label>
				</span>
				<span>
					<input class="balloon indent" id="asignacion" type="text" name="asignacion" value="<?php echo $asignacion ?>" readonly/><label class="label" for="asignacion">Asignacion</label>
				</span>
				<span>
                    <select class="balloon indent" id="Cargo" type="text" name="cargo"  />Cargo<label class="label" for="Cargo">Cargo</label>
                        <option value="1">Director de Linea</option>
                        <option value="2">Coordinador</option>                        
                        <option value="3">Consultor Juridico</option>
                    </select>
				</span>
				<span>
					<input class="balloon indent" id="Cedula" type="text" name="cedula"  /><label class="label" for="Cedula">Cedula</label>
				</span>
				<span>
					<input class="balloon indent" id="Telefono" type="text" name="telefono"  /><label class="label" for="Telefono">Telefono</label>
				</span>
				<span>
					<select class="balloon indent" id="Piso" type="text" name="piso" ><label class="label" for="Piso">Piso</label>
                        <option value="PB">PB</option>
                        <option value="P1">P1</option>
                        <option value="P2">P2</option>
                        <option value="P3">P3</option>
                    </select>
                </span>
				<span>
                    <select class="balloon indent" id="Dependencia" type="text" name="dependencia"  >Dependencia<label class="label" for="Dependencia">Dependencia</label>
                        <option value="1">Auditoria interna</option>
                        <option value="2">Atencion al ciudadano</option>                        
                        <option value="3">Apoyo profesional</option>                        
                        <option value="4">Bienestar social</option>
                        <option value="5">Consultoria Juridica</option>
                        <option value="6">Direccion general de bienes raices</option>
                        <option value="7">Direccion general del despacho</option>
                        <option value="8">Direccion general de la cultura del agua</option>
                        <option value="9">Direccion general de transferencia revolucionaria del servicio de agua al poder popular</option>
                        <option value="10">Direccion general de servicio de infraestructura</option>
                        <option value="11">Gestion administrativa</option>
                        <option value="12">Oficina de gestion comunicacional</option>
                        <option value="13">Oficina de planificacion y presupuesto</option>
                        <option value="14">Oficina de gestion humana</option>
                        <option value="15">Oficina de tecnologias de la informacion y la comunicacion</option>
                        <option value="16">Oficina estrategica de seguimiento y evaluacion de politicas publicas</option>
                        <option value="17">Viceministerio de administracion de cuencas hidrograficas</option>
                        <option value="18">Viceministerio para la gestion popular del agua</option>
                        
                    </select>
				</span>
				<span>
					<input class="balloon indent" id="Marca1" type="text" name="marca1" /><label class="label" for="Marca1">Marca de Movil</label>
				</span>
				<span>
					<input class="balloon indent" id="Serie1" type="text" name="serie1" /><label class="label" for="Serie1">Serial del Movil</label>
				</span>
				<span>
					<input class="balloon indent" id="Mac" type="text" name="mac" /><label class="label" for="Mac">IMEI</label>
				</span>
				<span>
					<input class="balloon indent" id="Marca2" type="text" name="marca2"  /><label class="label" for="Marca2">Numero Del Telefono Asignado</label>
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
