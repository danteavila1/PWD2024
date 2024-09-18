<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej5</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="../js/validaciones.js" defer></script>
</head>
<body>
    <form id="form" action="formAction.php" method="GET" name="form">
        Nombre: <input type="text" name="nombre_form" /> <br/>
        Apellido: <input type="text" name="apellido_form" /> <br/>
        Edad: <input type="number" name="edad_form"/> <br/>
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
                <input type="radio" name="estudios_form" id="estudios1" value="no tiene"> No tiene estudios
            </div>
            <div class="opcionesSelect">
                <input type="radio" name="estudios_form" id="estudios2" value="primarios"> Estudios primarios
            </div>
            <div class="opcionesSelect">
                <input type="radio" name="estudios_form" id="estudios3" value="secundarios"> Estudios secundarios
            </div>
        </div>

        <div class="datosDeportes">
            <h2>Deportes que practica</h2>
            <div class="opciones">
                <input type="checkbox" name="deporte[]" id="deporte[]" value="voley">Voley
            </div>
            <div class="opciones">
                <input type="checkbox" name="deporte[]" id="deporte[]" value="basket">Basket
            </div>
            <div class="opciones">
                <input type="checkbox" name="deporte[]" id="deporte[]" value="futbol">Futbol
            </div>
            <div class="opciones">
                <input type="checkbox" name="deporte[]" id="deporte[]" value="tennis">Tennis
            </div>
        </div>

        <input type="submit" name="Submit" value="Enviar">
    </form>
</body>
</html>