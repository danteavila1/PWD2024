<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej5</title>
</head>
<body>
    <form action="formAction.php" method="GET" name="form">
        Nombre: <input type="text" name="nombre_form" /> <br/>
        Apellido: <input type="text" name="apellido_form" /> <br/>
        Edad: <input type="number" name="edad_form" min="0"/> <br/>
        Direccion: <input type="text" name="direccion_form" /> <br/>

        <div class="datosPersonales">
            <label for="sexo">Sexo</label>
            <select id="sexo" name="sexo_form">
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>
        </div>

        <div class="datosEstudios">
            <h2>Nivel de estudios</h2>
            <div class="opcionesSelect">
                <input type="radio" name="estudios_form" id="estudios1" value="no tiene" required> No tiene estudios
            </div>
            <div class="opcionesSelect">
                <input type="radio" name="estudios_form" id="estudios2" value="primarios"> Estudios primarios
            </div>
            <div class="opcionesSelect">
                <input type="radio" name="estudios_form" id="estudios3" value="secundarios"> Estudios secundarios
            </div>
        </div>

        <input type="submit" name="Submit" value="Enviar">
    </form>
</body>
</html>