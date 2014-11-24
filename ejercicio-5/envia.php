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
        <li>El usuario captura los dos siguientes numeros (100 y 0).
        <li>En la página destino se intenta realizar la operación de división de los números.
        <li>La página destino arroja errores, por tanto tienes que:
            <ul>
                <li>Averiguar en que consisten los errores
                <li>Corregir los error
            </ul>
    </ol>
    
    <form action="recibe.php" method="POST">
        <label>Dividendo:</label>
            <input type="text" name="dividendo" value="100" />
        <br />
        <label>Divisor:</label>
            <input type="text" name="divisor" value="0" />

        <br />
        <input type="submit" value="Enviar" />
    </form>

</body>

</html>