<?php
// print_r($_POST);
if(!$_POST){
    header('Location: index.php');
}

$cadena = $_POST['cadena'];

for($x=0; $x <= $cadena;$x++){
    echo "Escribiendo " .$cadena. " líneas";
    echo "<br>";
}

?>