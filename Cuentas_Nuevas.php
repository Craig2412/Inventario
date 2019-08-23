<?php 
    $alert = '';

    if(!empty($_POST)){        

        if(empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['rol'])){
            $alert = 'Todos los campos son obligatorios';
        }else{

            include "conexion.php";

            $nombre = $_POST['nombre'];            
            $email = $_POST['correo'];          
            $user = $_POST['usuario_nuevo'];          
            $clave = $_POST['contraseña'];          
            $rol = $_POST['rol'];


            $query = mysqli_query($conec,"SELECT * FROM usuario where usuario = '$user' OR correo = '$email'");
            $result = mysqli_fetch_array($query);

            if($result > 0){
                $alert = 'El correo o el usuario ya existe';
            }else{
                $query_insert = mysqli_query($conec,"INSERT INTO usuario(nombre,correo,usuario,clave,rol) VALUES('$nombre', '$email', '$user', '$clave', '$rol')");
                
                if($query_insert){ 
                    $alert = 'El usuario se creo correctamente';
                }else{
                    $alert = 'ERROR EN LA CREACION DE USUARIO';
                }
            }
        }
    }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="">
        <h1>Registro Usuario</h1>
        <div class="alert"><?php echo isset($alert)? $alert : ''; ?></div>

        
            <form class="form col-lg-10 col-md-12 col-sm-12 col-xs-6 col-xf-10" action="">
                <input class="ballon nombre" type="text" name="nombre" placeholder="Nombre Completo">
                <input class="ballon correo" type="email" name="correo " placeholder="Correo">
                <input class="ballon usuario" type="text" name="usuario" placeholder="Usuario">
                <input class="ballon contraseña" type="password" name="clave" placeholder="Contraseña ">
                <select name="rol" class="rol">
                    <option value="1">Administrador</option>
                    <option value="2">Analista</option>
                    <option value="3">Usuario</option>
                </select>
                <input type="submit" value="Crear Usuario Nuevo">
            
            </form>


    </div>



    
</body>
</html>