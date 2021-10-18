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
    $aprobado=true;
    $betico=true;
    $calificacion=5;
    define("PUNTOS", 3);
    $nacimiento=1998;
    $actualmente=2021;
    $edad=$actualmente-$nacimiento;
    $notaEjercicio=10;
    $resultadoAntes=++$nacimiento*2;
    $resultadoDespues=($resultadoAntes++) * ($notaEjercicio);
    echo $resultadoDespues;
    ?>
</body>
</html>

