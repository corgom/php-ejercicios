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
        <li>El usuario debe capturar 2 numeros.
        <li>En el formulario actual existe el campo "numA", agregar un segundo campo con el nombre "numB"
            para que el usuario capture el segundo número.
        <li>En la página destino se deben recuperar los números/parametros cada una en una variable php
        <li>Usando las variables php donde se recuperaron los dos parametros se deben realizar y
            mostrar las siguientes operaciones:
            <ul>
                <li>Incrementar en uno numA (se debe conservar el incremento para las siguientes operaciones)
                <li>Decrementar en uno numB (se debe conservar el decremento para las siguientes operaciones)
                <li>Suma de los numeros que resultaron de las operaciones anteriores: numA + numB
                <li>Resta: numA - numB
                <li>Multiplicación: numA * numB
                <li>Division: numA / numB
                <li>Modulo: numA % numB
            </ul>
            <a href="<?php echo $pagina_solucion ?>">Ver página de ejemplo de solución</a> para ver los formatos
                de salida de cada una de las opera  ciones.
    </ol>
    
    <form action="recibe.php" method="POST">
        <label>Primer número:</label>
            <input type="text" name="numA" />
        <br />
        <label>Segundo número:</label>
        

        <br />
        <input type="submit" value="Enviar" />
    </form>

</body>

</html>