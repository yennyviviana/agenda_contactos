<?php


require_once('Config/database.php');
require_once('Config/sentencia.php');
require_once('Models/Usuario.php');
require_once('Views/head.php');


?>



<?php
if (isset($_GET['da'])) {
	$dato = $_GET['da'];
     switch($dato){

        case 1:
            require_once('Views/registro/registro.php');
            break;
        
            case 2:
                require_once('Views/registro/insert.php');
                break;

                case 3:
                    require_once('Views/registro/edit.php');
                    break;

                    case 4:
                        require_once('Views/registro/delete.php');
                        break;

                        case 5:
                            require_once('Views/registro/filter.php');
                            break;
         }
     

        
    } else {
        // Mostrar alguna página por defecto o mensaje de error
        //echo "Página no encontrada.";
    }



?>