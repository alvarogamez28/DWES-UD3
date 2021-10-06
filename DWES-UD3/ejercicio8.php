<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1">
        <tr>
            <th>Elevado a </th>
            <th>Resultado</th>
        </tr>
    
    <?php
        $num= 2;
        $lim=6;
        for ($i=0; $i <= $lim ; $i++) { 
            if ($i == 4){
                continue;
            }
            if ($i == 6){
                break;
            }
            echo "<tr>";
                echo "<td>$i</td>";
                printf("<td>%d</td>", pow($num,$i));
            echo "</tr>";
        }
    ?>
    </table>
    
    
</body>
</html>