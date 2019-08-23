<?php
require 'funciones.php';
if ($_POST) {
    $Nombre_tabla = $_POST['Nombre_tabla'];
    $select = $_POST['select'] ?? 2;
    $select + 0;
    echo direccionamiento1($select, $Nombre_tabla);
} 

?>