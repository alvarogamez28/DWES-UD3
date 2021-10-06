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
    $fecha="2019-10-28";
    $añoActual= "2021-10-04";

    $fecha=strtotime($fecha);
    $añoActual=strtotime($añoActual);

    $edad= $añoActual - substr($fecha, 3);
        if ($edad >= 18) {
            echo "Puedes pasar dentro";
        }elseif ($edad < 18) {
                echo "No puedes pasar dentro";
        }elseif ($edad >= 65){
            echo "Estas pocho, acuestate";
        }
         
        

    ?>
</body>
</html>