<?php

include("../inc/config.php");

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


    

</body>

</html>