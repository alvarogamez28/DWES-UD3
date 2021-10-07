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
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>ID</th>
    </tr>
    <?php
    $productos=array();
    $productos[]=array("Nombre"=>"Pantalla", "Precio"=>"3€", "Stock"=>"3uds", "ID"=>"#45");
    $productos[]=array("Nombre"=>"Teclado", "Precio"=>"8€", "Stock"=>"5uds", "ID"=>"#78");
    $productos[]=array("Nombre"=>"Raton", "Precio"=>"1€", "Stock"=>"1us", "ID"=>"#11");

    var_dump($productos);
    
    foreach ($productos as $valor){
        echo "<tr>";
            echo "<td>$valor[Nombre]</td>";
            echo "<td>$valor[Precio]</td>";
            echo "<td>$valor[Stock]</td>";
            echo "<td>$valor[ID]</td>";
        echo "<tr>";
    }
    ?>
</table>
</body>
</html>