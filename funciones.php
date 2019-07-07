<?php
function direccionamiento($select){
    $empty='';
    $noEmpty='';
        if (empty($select) and $select===0) {
        $empty.="<script> location.href='registro-sin-asignar.php'; </script>";
        return $empty;
        }else{
            $noEmpty.= "<script> location.href='registro.php'; </script>";
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


?>