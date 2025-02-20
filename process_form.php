<?php
// process_form.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Validar y procesar los datos
    if (!empty($name) && !empty($email)) {
        // Aquí puedes agregar código para almacenar los datos en una base de datos
        // o realizar otras acciones con los datos recibidos

        echo "Nombre: " . htmlspecialchars($name) . "<br>";
        echo "Correo Electrónico: " . htmlspecialchars($email) . "<br>";
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
