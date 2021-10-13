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
        $nombre="";
        $apellido="";
        $direccion="";
        $estudios="";
        $instituto="";
        $texto="";
        $dia="";
        $red="";
        $checkbox="";
        $errorNombre="";
        $errorApellido="";
        $errorDireccion="";
        $errorInstituto="";
        $errorEstudios="";
        $errorRed="";
        $errorCheckbox="";
        $errorDia="";
        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include "ejercicio17.fun.php";
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $direccion = $_POST["direccion"];
            $instituto = $_POST["instituto"];
            $estudios = $_POST["estudios"];
            $dia = $_POST["dias"];
            $red = $_POST["red"];
            $checkbox = $_POST["checkbox"];

            if (!isset($_POST["red"])){
                $errorRed = "Tienes que seleccionar una red";
            }

            if (!isset($_POST["checkbox"])){
                $errorCheckbox = "Tienes que activar algun checkbox";
            }

            if (!isset($_POST["dias"])){
                $errorDia = "Tienes que seleccionar un día";
            }

            if(!preg_match('/^IES/', $instituto)){
                $errorInstituto = "El instituto tiene que comenzar por IES";
            }
            if (empty($nombre)){
                $errorNombre = "El nombre tiene que estar relleno";
            }
            if (empty($apellido)){
                $errorApellido = "El apellido tiene que estar relleno";
            }
            if (empty($direccion)){
                $errorDireccion = "La dirección tiene que estar relleno";
            }
            if (empty($instituto)){
                $errorDireccion = "El instituto tiene que estar relleno";
            }
            if (empty($estudios)){
                $errorEstudios = "Los estudios tiene que estar relleno";
            }


        }
    ?>
    <fieldset>
        <legend>Formulario de opciones</legend>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $nombre;?>"/>
                <span style="color:red"><?php echo $errorNombre;?> </span>
            </p>
            <p>
                <label for="apellido">Apellidos</label>
                <input type="text" name="apellido" value="<?php echo $apellido;?>"/>
                <span style="color:red"><?php echo $errorApellido;?> </span>
            </p>
            <p>
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" value="<?php echo $direccion;?>"/>
                <span style="color:red"><?php echo $errorDireccion;?> </span>
            </p>
            <p>
                <label for="red">Wifi</label>
                <input type="radio" name="red" value=""/>
                <label for="red">Cable</label>
                <input type="radio" name="red" value=""/>
                <label for="red">Fibra</label>
                <input type="radio" name="red" value=""/>
                <span style="color:red"><?php echo $errorRed;?> </span>
            </p>
            <p>
                <label for="instituto">Instituto</label>
                <input type="text" name="instituto" value=""/>
                <span style="color:red"><?php echo $errorInstituto;?> </span>
            </p>
            <p>
                <label for="estudios">Estudios elegidos</label>
                <input type="text" name="estudios" value=""/>
                <span style="color:red"><?php echo $errorEstudios;?> </span>
            </p>

            <select name="dias" id="" multiple>
                <option value="lunes">Lunes</option>
                <option value="martes">Martes</option>
                <option value="miercoles">Miércoles</option>
                <option value="jueves">Jueves</option>
                <option value="viernes">Viernes</option>
                <option value="sabado">Sabado</option>
                <option value="domingo">Domingo</option>
                <span style="color:red"><?php echo $errorDia;?> </span>
            </select>
            <p>
                <label for="historia">Historia</label>
                <input type="checkbox" name="checkbox[]" value="historia" />
                <label for="geofrafia">Geografía</label>
                <input type="checkbox" name="checkbox[]" value="geofrafia"/>
                <label for="lengua">Lengua</label>
                <input type="checkbox" name="checkbox[]" value="lengua"/>
                <label for="matematicas">Matemáticas</label>
                <input type="checkbox" name="checkbox[]" value="matematicas"/>
                <span style="color:red"><?php echo $errorCheckbox;?> </span>
            </p>

            <textarea name="texto" placeholder="Inserte el texto" value="<?php
                $texto = stripslashes($texto);
                $texto = strip_tags($texto);
                $texto = htmlspecialchars($texto);
                ?>">
            </textarea>


            <p>
                <input type="submit" name="enviar" value="Enviar"/>
                <input type="reset" name="cancelar" value="Cancelar"/>
            </p>
        </form>
    </fieldset>

</body>
</html>