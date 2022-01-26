<?php
function listar(){
    //Se incluye al modelo
    require 'models/libros_model.php';
    //En $libros tenemos un array con todos los libros gracias al modelo
    $libros = getLibros();
    //La vista recibe un array para mostrarlo por pantalla
    include 'views/libros_view.php';
}

?>