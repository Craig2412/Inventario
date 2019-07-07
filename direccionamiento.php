<?php
require 'funciones.php';
if ($_POST) {
    $select = $_POST['select'] ?? 0;
    echo direccionamiento($select);
} 

?>