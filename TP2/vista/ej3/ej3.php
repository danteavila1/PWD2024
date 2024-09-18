<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej3</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="../js/validaciones.js" defer></script>
</head>
<body>
    <form action="formAction.php" method="post" name="form" id="form">
        Nombre: <input type="text" name="nombre_form" /> <br/>
        Apellido: <input type="text" name="apellido_form" /> <br/>
        Edad: <input type="number" name="edad_form"/> <br/>
        Direccion: <input type="text" name="direccion_form" /> <br/>
        <input type="submit" name="Submit" value="Enviar">
    </form>
</body>
</html>