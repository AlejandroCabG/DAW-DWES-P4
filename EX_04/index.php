<!--4. Crea un formulario que permita introducir los siguientes valores y los muestre como
resultado:
• Nombre
• Apellidos
• Contraseña
• Alumno o Profesor (Checkbox)
• Foto (Nombre del fichero).
• Edad
• Comentarios
• Campo oculto con el nombre test y el texto “myPrueba”-->
    <!DOCTYPE HTML>
    <html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="formulario">
    Nombre: <input type="text" name="nombre" value="" placeholder="nombre">
    <br><br>
    Apellidos: <input type="text" name="apellidos" value="" placeholder="apellidos">
    <br><br>
    Contraseña: <input type="password" name="contraseña" value="" placeholder="contraseña">
    <br><br>
    Alumno: <input type="checkbox" name="alumno" value="" placeholder="alumno">
    Profesor: <input type="checkbox" name="profesor" value="" placeholder="profesor">
    <br><br>
    Foto: <input type="file" name="foto" value="" placeholder="foto">
    <br><br>
    Edad: <input type="number" name="edad" value="" placeholder="edad">
    <br><br>
    Comentarios: <textarea name="comentario" rows="5" cols="30" placeholder="comentario"></textarea>
    <br><br>
    Campo oculto: <input type="hidden" name="oculto" value="myPrueba" placeholder="oculto">
    <br><br>
    <input type="submit" value="Enviar"><br><br>

    <?php
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        echo 'Tu nombre es: '.$nombre;
        echo "<br>";
    }
    if(isset($_POST['apellidos'])){
        $apellidos = $_POST['apellidos'];
        echo 'Tus apellidos son: '.$apellidos;
        echo "<br>";
    }
    if(isset($_POST['contraseña'])){
        $contraseña = $_POST['contraseña'];
        echo 'Tu contraseña es: '.$contraseña;
        echo "<br>";
    }

    if(isset($_POST['alumno'])){
        $alumno = $_POST['alumno'];
        echo 'Has escogido: '.$alumno;
        echo "<br>";
    }
    if(isset($_POST['profesor'])){
        $profesor = $_POST['profesor'];
        echo 'Has escogido: '.$profesor;
        echo "<br>";
    }
    if(isset($_POST['foto'])){
        $foto = $_POST['foto'];
        echo 'Tu archivo es: '.$foto;
        echo "<br>";
    }
    if(isset($_POST['edad'])){
        $edad = $_POST['edad'];
        echo 'Tu edad es: '.$edad;
        echo "<br>";
    }
    if(isset($_POST['comentario'])){
        $comentario = $_POST['comentario'];
        echo 'El comentario añadido: '.$comentario;
        echo "<br>";
    }
    if(isset($_POST['oculto'])){
        $oculto = $_POST['oculto'];
        echo 'El campo oculto es: '.$oculto;
        echo "<br>";
    }
    ?>

    </form>
    </body>
    </html>