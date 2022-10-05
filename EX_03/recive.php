<?php
// print_r($_POST);
if(!$_POST){
    header('Location: index.php');
}

//Variable cadena
$cadena = $_POST['cadena'];

//bucle para indicar las X veces que se repitan las líneas
for($x=1; $x <= $cadena;$x++){
    echo "Escribiendo " .$cadena. " líneas";
    echo "<br>";
}

?>