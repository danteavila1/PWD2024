<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej3</title>
</head>
<body>
    <form action="../control/mostrarMensaje.php" method="post" name="form">
        Nombre: <input type="text" name="nombre_form" /> <br/>
        Apellido: <input type="text" name="apellido_form" /> <br/>
        Edad: <input type="number" name="edad_form" min="0"/> <br/>
        Direccion: <input type="text" name="direccion_form" /> <br/>
        <input type="submit" name="Submit" value="Enviar">
    </form>
</body>
</html>