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
        $numeroTabla=3;
        $contador=1;
        do {
            echo "$numeroTabla x $contador = ", $numeroTabla * $contador;
            echo "</br>";
            $contador++;
        }
        while ($contador < 11);
            
        
    ?>
</body>
</html>