<?php
function direccionamiento($select){
    $empty='';
    $noEmpty='';
        if ($select===2) {
        $empty.="<script> location.href='registro_sin_asignar.php?select=$select'; </script>";
        return $empty;
        }else{
            $noEmpty.= "<script> location.href='registro.php?select=$select'; </script>";
            return $noEmpty;
        }
}

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




?>