### Ejercicio 4 

 Para poder crear un formulario (HTML) junto a PHP en el mismo documento añado 
el form action **htmlspecialchars** determino el método **POST**
y el nombre _formulario_.
Una vez definido el formulario, paso a crear cada etiqueta input de tipo text, para nombre y apellidos;
para la contraseña defino el tipo como password, que "protege" la contraseña mostrando asteríscos * en lugar de los números;
para alumno y profesor el tipo definido es checkbox; foto es file, que permite escoger un documento del ordenador; la edad
es de tipo number; para los comentarios una etiqueta text area de 5 filas y 30 columnas y para mostrar un comentario oculto
el tipo hidden.

Para el código en PHP de cada uno de los valores introducidos previamente, he ido haciendo bucles if 
con la función **isset** para determinar si la variable está definida y no es null, que fueran cogiendo 
los valores y mostrándolos con un echo. Siguiendo la estructura que se muestra a continuación:

if(isset($_POST['nombre'])){
$nombre = $_POST['nombre'];
echo 'Tu nombre es: '.$nombre;
echo "<br>";
}
