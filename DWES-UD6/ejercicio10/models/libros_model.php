<?php
    function getConnection(){
        $user="root";
        $pwd="root";
        return new PDO('mysql:host=localhost;dbname=biblioteca', $user, $pwd);
    }
    function getLibros(){
        $db = getConnection();
        $result = $db->query('SELECT titulo, precio FROM libros');
        $libros = array ();
        while ($libro = $result->fetch())
            $libros[] = $libro;
        return $libros;
    }
    function muestraLibro(){
        $db = getConnection();
    }
    
?>