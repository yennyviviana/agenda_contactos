<?php
// Incluye el archivo de configuración de la base de datos.
require_once('Config/database.php');
require_once('Config/sentencia.php');
require_once('Controllers/validacion.php');




// Función para validar el formulario
function validarFormulario($postData) {
    $errors = [];

    $email = $postData["email"];
    $password = $postData['password'];

    // Validación de campos obligatorios
    if (empty($email)) {
        $errors[] = "El campo Nombre es obligatorio.";
    }

    if (empty($password)) {
        $errors[] = "El campo Teléfono es obligatorio.";
    }

  

    return $errors;
}

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Llama a la función validarFormulario y almacena los resultados en una variable
    $errores = validarFormulario($_POST);

    // Verifica si hay errores y los muestra si es necesario
    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo $error . "<br>";
        }
    } else {
        // Los datos son válidos, puedes continuar con el procesamiento.
        echo "¡Datos válidos!";
        // Aquí puedes agregar código para insertar los datos en la base de datos si es necesario.
    }
}

?>



