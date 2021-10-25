<?php
@$mysqli = mysqli_connect('localhost','developer','developer','agenciaviajes');
$error = mysqli_connect_errno();
if ($error!=null) {
    echo "<p>Error  $error conectando a la base de datos: ",mysqli_connect_errno($mysqli),"</p>";
    exit();
 
}else{
    echo "Conectando correctamente";
    echo "<br>";
    
}/*Consulta*/
$result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
/*MOSTRAR DATOS DE LA TABLA*/
if ($result==false) {
    echo "La consulta no ha funcionado correctamente.";
    
}else{
    $fila=mysqli_fetch_assoc($result);
        echo "<br>";
        echo "<table border='1'>";
        foreach ($fila as $key) {
            echo "<td>" . $key . "</td>";
            echo "<tr>"
            echo "<td>" . $fila[$key];
         
            
        }
        echo "</table>";
    
}


/*var_dump($result);*/
mysqli_close($mysqli);
?>