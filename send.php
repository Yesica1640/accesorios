<?php
// Incluir el archivo de conexión
include("conexion.php");

// Verificar si el formulario fue enviado
if (isset($_POST['send'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['password']) >= 1
    ) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $password = trim($_POST['password']);
        $fecha = date("Y-m-d"); // Fecha en formato estándar

        // Verificar si el correo ya existe
        $check_email_query = "SELECT * FROM registros WHERE `Correo electronico` = ?";
        $stmt = $conex->prepare($check_email_query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo '<h3 class="error">El correo ya está registrado, intenta con otro</h3>';
        } else {
            // Hashear la contraseña antes de almacenarla
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $consulta = "INSERT INTO `registros`( `Nombre`, `Correo electronico`, `Telefono`, `Contrasena`, `fecha`)
            VALUES ('$name','$email','$phone','$password','$fecha')";
            $stmt = $conex->prepare($consulta);
            $stmt->bind_param("sssss", $name, $email, $phone, $hashed_password, $fecha);

            if ($stmt->execute()) {
                echo '<h3 class="ok">Te has inscrito correctamente</h3>';
            } else {
                echo '<h3 class="error">Ocurrió un error, intenta de nuevo</h3>';
            }
        }
    } else {
        echo '<h3 class="error">Completa todos los campos</h3>';
    }
}
?>