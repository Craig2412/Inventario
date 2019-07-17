<?php
require 'funciones.php';
if ($_POST) {
    $select = $_POST['select'] ?? 'No asignado';
    echo direccionamiento($select);
} 

?>