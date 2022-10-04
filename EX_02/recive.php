<?php
// print_r($_POST);
if(!$_POST){
    header('Location: index.php');
}

$cadena = $_POST['cadena'];
eval("\$cadena=$cadena;");

echo 'La operación matemática ' .$operacion = $_POST['cadena'].' es ==>';
echo $cadena;


