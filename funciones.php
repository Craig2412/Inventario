<?php
function direccionamiento($select){
    $empty='';
    $noEmpty='';
        if ($select==='No asignado') {
        $empty.="<script> location.href='registro_sin_asignar.php?select=$select'; </script>";
        return $empty;
        }else{
            $noEmpty.= "<script> location.href='registro.php?select=$select'; </script>";
            return $noEmpty;
        }
}

function generador(){
    $largo= 5;
    $cadena=  '0123456789';
    $password = '';
    $limite = strlen($cadena) - 1;
    $prefix='PC-';
    
    for ($i=0; $i < $largo; $i++)
        $password .= $cadena[rand(0, $limite)];
        $password= $prefix . $password;
    
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