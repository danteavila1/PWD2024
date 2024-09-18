<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej7</title>
</head>
<body>
    <form name="form" method="get" action="formAction.php">
        <h2>Indique dos números para operar con</h2>
        <table>
            <tr>
                <td>Número 1° <input type="number" id="num1" name="num1" required></td>
            </tr>
            <tr>
                <td>Número 2° <input type="number" id="num2" name="num2" required></td>
            </tr>
            <tr>
                <td>Seleccione una operación matemática</td>
                <td>
                    <select id="operacion" name="operacion">
                        <option value="suma">SUMA</option>
                        <option value="resta">RESTA</option>
                        <option value="multiplicacion">MULTIPLICACIÓN</option>
                        <option value="division">DIVISIÓN</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" id="submit" value="Enviar">
    </form>
</body>
</html>