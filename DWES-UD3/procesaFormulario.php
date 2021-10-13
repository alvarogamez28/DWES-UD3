<?php
$usuario = $_POST["usuario"];
$contrasenya = $_POST["contrasenya"];

if (preg_match("\w{8,}/^[A-Z]", $usuario)){
    echo "el $usuario tiene la contraseña $contraseañ";
}else {
    echo "El campo usuario tiene que tener 8 caracteres con un numero y una mayuscula";
}


$usuario = strip_tags($usuario);
$usuario = stripslashes($usuario);
$usuario = htmlspecialchars($usuario);




echo "El usuario  $usuario tiene la contraseña $contrasenya";

if (empty($usuario)) {
    echo "El usuario debe estar relleno";
}
echo "<br>";
if (empty($contrasenya)) {
    echo "El contrasenya debe estar relleno";
}

?>