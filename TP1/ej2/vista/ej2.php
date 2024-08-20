<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej2</title>
</head>
<body>
    <h1>Horas de Cursada - Programación Web Dinámica</h1>
    <form name="form2" method="get" action="../control/verhoras.php">
        <label for="lunes">Lunes:</label>
        <input type="number" id="lunes" name="horas[]" min="0" required><br><br>

        <label for="martes">Martes:</label>
        <input type="number" id="martes" name="horas[]" min="0" required><br><br>

        <label for="miercoles">Miércoles:</label>
        <input type="number" id="miercoles" name="horas[]" min="0" required><br><br>

        <label for="jueves">Jueves:</label>
        <input type="number" id="jueves" name="horas[]" min="0" required><br><br>

        <label for="viernes">Viernes:</label>
        <input type="number" id="viernes" name="horas[]" min="0" required><br><br>
        
        <input type="submit" name="Submit" value="Enviar" />
    </form>
</body>
</html>