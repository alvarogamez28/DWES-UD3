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
        $meses=[];
        $meses[]="enero";
        $meses[]="febrero";
        $meses[]="marzo";
        var_dump($meses);
        echo "<br>";
        $elementos=count($meses);
        echo "El array contiene $elementos meses";
        echo "<br>";
        
        $meses[]=7;
        $meses[]="Abril";
        $meses[]=true;
        $meses[5]="Mayo";
        $meses[]="Junio";
        $meses[]="Julio";
        $meses[]="Agosto";
        $meses[]="Septiembre";
        $meses[]="Octubre";
        $meses[]="Noviembre";
        $meses[]="Diciembre";
        var_dump($meses);
        echo "<br>";
        count($meses);

        unset($meses[3]);
        var_dump($meses);

    ?>
</body>
</html>