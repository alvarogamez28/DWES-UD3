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
        $var1= 22;
        $var2=4;
        $var3=6;
        if ($var1 > $var2 && $var1 > $var3){
            echo $var1;
            
        }elseif($var2 > $var1 && $var2 > $var3){
            echo $var2; 
        }else {
            echo $var3;
        }
    ?>

</body>
</html>