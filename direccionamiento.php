<?php
require 'funciones.php';
if ($_POST) {
<<<<<<< HEAD
    $Nombre_tabla = $_POST['Nombre_tabla'];
    $select = $_POST['select'] ?? 2;
    $select + 0;
    echo direccionamiento1($select, $Nombre_tabla);
=======
    $select = $_POST['select'] ?? 2;
    $select + 0;
    echo direccionamiento($select);
>>>>>>> d1965619a22cb898b618fdee37cca9386d1c84c0
} 

?>