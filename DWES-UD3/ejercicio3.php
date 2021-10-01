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
        $var1=4;
        switch ($var1){
            case 1:echo "Lunes";break;
            case 2:echo "Martes";break;
            case 3:echo "Miercoles";break;
            case 4:echo "Jueves";break;
            case 5:echo "Viernes";break;
            case 6:echo "Sábado";break;
            case 7:echo "Domingo";break;
            default : echo "No corresponde a ningun día";break;

        }

    ?>
</body>
</html>