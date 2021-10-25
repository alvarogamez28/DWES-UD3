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
/*
Skip to content
Search or jump to…
Pull requests
Issues
Marketplace
Explore
 
@alvarogamez28 
alvarogamez28
/
DWES-UD4
Public
1
0
0
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
Settings
DWES-UD4/Bases de datos/ejercicio4.php /
@alvarogamez28
alvarogamez28 ejercicio4
Latest commit deed1ff 20 hours ago
 History
 1 contributor
107 lines (93 sloc)  3.21 KB
  
<?php
    @$mysqli = mysqli_connect('localhost','root','root','agenciaviajes');
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
        
    }else {
        
        //mysqli_fetch_assoc
        echo "<h1>mysqli_fetch_assoc</h1>";
        $fila=mysqli_fetch_assoc($result); 
        echo "<table border='1'>";
        echo "<tr>";
        foreach ($fila as $key => $value) {
            print_r("<td>" . $key . "</td>");
        }
        echo "</tr>";
        $result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
        while ($fila=mysqli_fetch_assoc($result)) {
            
            echo "<tr>";
            foreach ($fila as $key) {
                print_r ("<td>" . $key . "</td>");
            }
            echo "</tr>";
        }
        echo "</table>";
        //mysqli_fetch_object
        echo "<h1>mysqli_fetch_object</h1>";
        $result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
        $fila=mysqli_fetch_object($result); 
        echo "<table border='1'>";
        echo "<tr>";
        foreach ($fila as $key => $value) {
            print_r ("<td>" . $key . "</td>");
        }
        echo "</tr>";
        $result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
        while ($fila=mysqli_fetch_object($result)) {
            
            echo "<tr>";
            foreach ($fila as $key) {
                print_r ("<td>" . $key . "</td>");
            }
            echo "</tr>";
        }
        echo "</table>";

        //mysqli_fetch_array
        echo "<h1>mysqli_fetch_array</h1>";
        $result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
        $fila=mysqli_fetch_array($result); 
        echo "<table border='1'>";
        echo "<tr>";
        foreach ($fila as $key => $value) {
            print_r ("<td>" . $key . "</td>");
        }
        echo "</tr>";
        $result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
        while ($fila=mysqli_fetch_array($result)) {
            
            echo "<tr>";
            foreach ($fila as $key) {
                print_r ("<td>" . $key . "</td>");
            }
            echo "</tr>";
        }
        
        echo "</table>";

        //mysqli_fetch_row
        echo "<h1>mysqli_fetch_row</h1>";
        $result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
        $fila=mysqli_fetch_row($result); 
        echo "<table border='1'>";
        echo "<tr>";

        foreach ($fila as $key => $value) {
            print_r ("<td>" . $key . "</td>");
        }
        echo "</tr>";
        $result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
        while ($fila=mysqli_fetch_row($result)) {
            
            echo "<tr>";
            foreach ($fila as $key) {
                print_r ("<td>" . $key . "</td>");
            }
            echo "</tr>";
        }
        
        echo "</table>";
    }

    mysqli_close($mysqli);
?>
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Loading complete
*/ 