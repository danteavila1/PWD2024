<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej2</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="../js/validaciones.js" defer></script>
</head>
<body>
    <h1>Horas de Cursada - Programación Web Dinámica</h1>
    <form id="form" name="form2" method="get" action="formAction.php">
        <label for="lunes">Lunes:</label>
        <input type="number" id="horas" name="horas[]"><br><br>

        <label for="martes">Martes:</label>
        <input type="number" id="horas" name="horas[]"><br><br>

        <label for="miercoles">Miércoles:</label>
        <input type="number" id="horas" name="horas[]"><br><br>

        <label for="jueves">Jueves:</label>
        <input type="number" id="horas" name="horas[]"><br><br>

        <label for="viernes">Viernes:</label>
        <input type="number" id="horas" name="horas[]"><br><br>
        
        <input type="submit" name="Submit" value="Enviar" />
    </form>
</body>
</html>