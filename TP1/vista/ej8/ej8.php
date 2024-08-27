<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej8</title>
</head>
<body>
    <form name="form8" method="get" action="formAction.php">
        <h2> Para calcular la tarifa ingrese los siguientes datos</h2>
        <table>
            <tr>
                <td>
                    <label for="edad">Edad</label>
                    <input type="number" id="edad" name="edad" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="estudia">Estudia</label>
                    <input type="radio" name="estudia" value="si" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="estudia">No estudia</label>
                    <input type="radio" name="estudia" value="no">
                </td>
            </tr>
        </table>
        <input type="submit" id="submit" value="Enviar">
    </form>
</body>
</html>