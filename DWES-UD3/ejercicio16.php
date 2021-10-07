<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*function multiplicacion ($multiplicando1,$multiplicando2){
        return $multiplicando1 * $multiplicando2;
    }
    echo multiplicacion(3,7);*/
    include "funciones.inc.php";
    echo multiplicacion(3,7);
    echo "<br>";
    include_once "funciones2.inc.php";
    echo multiplicacion(3,7);
    require "funciones2.inc.php";
    echo multiplicacion(3,7);
    ?>
</body>
</html>