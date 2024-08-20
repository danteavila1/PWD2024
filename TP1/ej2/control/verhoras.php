<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $horas = $_GET['horas'];
    $totalHoras = array_sum($horas);
}

echo '<p>La cantidad total de horas cursadas en la semana es: '.$totalHoras.' horas.</p>';
echo '<a href="../vista/ej2.php">Volver a ingresar las horas</a>';