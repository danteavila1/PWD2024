<?php  
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $numero = $_GET['numero_form'];
        if($numero > 0){
            echo "numero positivo";
        } elseif ($numero==0){
            echo "numero es cero";
        } else {
            echo "numero negativo";
        }
    }
    echo '<a href="../vista/ej1.php">Volver a la página anterior</a>';
?>