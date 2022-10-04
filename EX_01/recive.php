<?php
// print_r($_POST);
if(!$_POST){
    header('Location: index.php');
}

$cadena = $_POST['cadena'];


echo 'La longitud de ' .$longitud = $_POST['cadena'].' es ==> ';
echo strlen ($cadena);

?>