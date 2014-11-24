<?php

include("../inc/config.php");

$dividendo = $_POST["dividendo"];
$divisor = $_POST["divisor"]

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Ejercicio</title>
    <style type="text/css">
        h1 {color: gray;}
        .arrow {background-color: yellow; color: red;}
    </style>
</head>

<body>
    <span class="arrow">&#8592;</span>
    <a href="<?php echo $ruta_pagina_indice_relativa_a_ejercicios . $pagina_indice ?>"> Regresar a índice de ejercicios</a><br />
    <a href="<?php echo $pagina_solucion ?>"> Ver ejemplo de salida o solución</a>


    <h1>Recibe datos</h1>

    <h2>Resultado del ejercicio:</h2>

    <p>Los numeros capturados son:
        <?php echo $dividendo+ ?> y <?php echo $divisor?>
    
    <p>El resultado de la división
        <?php echo $dividendo?>/<?php echo $divisor?> es igual a <?php echo $dividendo / $divisor ?>


    

</body>

</html>