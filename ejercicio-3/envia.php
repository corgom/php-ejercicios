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
        form {border: 1px dotted; padding: 10px; width: 500px;}
        input {margin: 3px}
        .normal {width: 500px; padding: 5px 5px 5px 30px; margin: 0 0 10px 0; background-color: #FF99CC;}
        .arrow {background-color: yellow; color: red;}
    </style>
</head>

<body>
    <span class="arrow">&#8592;</span>
    <a href="<?php echo $ruta_pagina_indice_relativa_a_ejercicios . $pagina_indice ?>"> Regresar a índice de ejercicios</a><br />
    <a href="<?php echo $pagina_solucion ?>"> Ver ejemplo de salida o solución</a>


    <h1>Envia datos</h1>
    
    <h2>Explicación del ejercicio:</h2>
    
    <ol class="normal">
        <li>El usuario captura el tamaño del borde en el campo
        del formulario de ésta página.
        <li>La página destino debe recibir el dato usando POST.
        <li>En la página destino generar una tabla con el tamaño de borde de la siguiente manera:
            <ol>
                <li>Si el tamaño de borde capturado por el usuario es mayor a 10, poner el borde = 10.
                <li>Si el tamaño de borde capturado es menor a 0, poner el borde = 3.
            </ol>
    </ol>
    
    <form action="recibe.php" method="POST">
        <label>Tamaño borde:</label>
            <input type="text" name="borde_tamano" />
        <br />
        <input type="submit" value="Enviar" />
    </form>

</body>

</html>