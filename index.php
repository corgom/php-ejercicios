<?php

include("inc/config.php");


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Ejercicios</title>
    <style type="text/css">
        h1 {color: gray;}
        form {border: 1px dotted; padding: 10px; width: 500px;}
        input {margin: 3px}
        .normal {width: 500px; padding: 10px; background-color: #FF99CC;}
        a {padding: 3px;}
    </style>
</head>

<body>
    <h1>Índice de ejercicios:</h1>
    <ul>
<?php
        for($i = 0; $i < count($ejercicios_basicos); $i++)
        {
?>
        <li><a href="ejercicio-<?php echo $i+1 ?>/envia.php">Ejercicio <?php echo $i+1 ?></a>:
            <br /><?php echo($ejercicios_basicos[$i]) ?>
<?php
        }
?>
    </ul>
</body>

</html>