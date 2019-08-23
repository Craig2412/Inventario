<?php
<<<<<<< HEAD
function direccionamiento1($select, $Nombre_tabla){

    switch ($Nombre_tabla) {
        case 'Móvil':
        $direccion='';
        
            if ($select === 2) {
                $direccion.="<script> location.href='registro_sin_asignar.php?select=$select'; </script>";
                return $direccion;
            } else{
            $direccion.= "<script> location.href='registro.php?select=$select&ID=tabla$Nombre_tabla'; </script>";
            return $direccion;
=======
function direccionamiento($select){
    $empty='';
    $noEmpty='';
        if ($select===2) {
        $empty.="<script> location.href='registro_sin_asignar.php?select=$select'; </script>";
        return $empty;
        }else{
            $noEmpty.= "<script> location.href='registro.php?select=$select'; </script>";
            return $noEmpty;
>>>>>>> d1965619a22cb898b618fdee37cca9386d1c84c0
        }
    
            break;

        case 'PC':
        $direccion='';
            if ($select === 2) {
                $direccion.="<script> location.href='registro_sin_asignar.php?select=$select'; </script>";
                return $direccion;
            } else{
            $direccion.= "<script> location.href='registro.php?select=$select&ID=tabla$Nombre_tabla'; </script>";
            return $direccion;
        }
    
            break;

        case 'Laptop':
        $direccion='';
       
            if ($select === 2) {
                $direccion.="<script> location.href='registro_sin_asignar.php?select=$select'; </script>";
                return $direccion;
            } else{
            $direccion.= "<script> location.href='registro.php?select=$select&ID=tabla$Nombre_tabla'; </script>";
            return $direccion;
        }
    
            break;

        case 'Impresora':
        $direccion='';
        
            if ($select === 2) {
                $direccion.="<script> location.href='registro_sin_asignar.php?select=$select'; </script>";
                return $direccion;
            } else{
            $direccion.= "<script> location.href='registro.php?select=$select&ID=tabla$Nombre_tabla'; </script>";
            return $direccion;
        }
    
            break;
        
        default:
            # code...
            break;
    }
}

<<<<<<< HEAD

=======
>>>>>>> d1965619a22cb898b618fdee37cca9386d1c84c0
function generador($equipo){
    $largo= 5;
    $cadena=  '0123456789';
    $password = '';
    $limite = strlen($cadena) - 1;
    
    
    for ($i=0; $i < $largo; $i++)
        $password .= $cadena[rand(0, $limite)];
        $password= $equipo ."-". $password;
    
    return $password;
}

function asignacion ($fila){
    $img = '';
    $filaasignada = $fila;
    if ($filaasignada === 'Asignado') {
        $img = '<img  class="correct" src="img/asignado.png" alt="asignado" title="Asignado">';
        return $img;
    }
    if ($filaasignada === 'No asignado') {
        $img = '<img  class="incorrect" src="img/no_asignado.png" alt="asignado" title="No asignado">';
        return $img;
    }
}




<<<<<<< HEAD

=======
>>>>>>> d1965619a22cb898b618fdee37cca9386d1c84c0
?>