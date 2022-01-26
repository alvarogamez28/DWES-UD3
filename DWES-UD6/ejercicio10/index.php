<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo libros</title>
</head>
<body>
        
        <?php
        //La carpeta donde buscaremos controladores
        define('CONTROLLERS_FOLDER', "controllers/");
        //Si no se indica un controlador, este es el controlador que se usará
        define('DEFAULT_CONTROLLER', "libros");
        //Si no se indica una acción, esta acción es la que se usará.
        define('DEFAULT_ACTION',"listar");
        //Obtenemos el controlador.
        //Si el usuario no lo introduce, seleccionamos el de por defecto.
        $controller = DEFAULT_CONTROLLER;
        if (!empty ($_GET['controller']))
        $controller = $_GET['controller'];

        $action = DEFAULT_ACTION;
        //Obtenemos la accion seleccionada.
        //Si el usuari no la indtroduce, seleccionamos la de por defecto.
        if (!empty ($_GET['action']))
        $action = $_GET['action'];

        //Ya tenemos el controlador y la accion
        //Formamos el nombre del fichero que contiene nuestro controlador
        $controller = CONTROLLERS_FOLDER . $controller . '_controller.php';
        //Si la variable $controller es un fichero lo requerimos
        try{
            if (is_file($controller))
                require_once($controller);
            else
                throw new Exception ('El controlador no existe - 404 not found');
            //Si la variable $action es una funcion la ejecutamos o detenemos el script
            if (is_callable($action)) 
                $action();
            else
            throw new Exception ('La accion no existe - 404 not found');    
               
        }
        catch (Exception $e){
            echo  "Excepcion capturada: ", $e->getMessage(), "\n";
        }

        //Incluir variables de configuracion y un unico controlador.
        require 'controllers/libros_controller.php'
        /*$user='root';
        $password = 'root';
        $db = new PDO('mysql:host=localhost;dbname=biblioteca', $user, $password);
        $result = $db->query('SELECT titulo, precio FROM libros');
        while ($libro = $result->fetch())
        {
        ?>
            <tr>
                <td><?php echo $libro['titulo']?></td>
                <td><?php echo number_format($libro['precio'],2)?></td>
            </tr>
        <?php
        }*/

        ?>
    </table>
    </body>
</html>
    
</html>
