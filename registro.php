<?php
session_start(); // Iniciar sesión para almacenar mensajes

include 'conexion.php'; // Incluye tu archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name']; // Asegúrate de que los nombres de los campos coincidan
    $email = $_POST['email']; // Asegúrate de que el nombre del campo coincide con el del formulario
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashear la contraseña

    // Validar formato del correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "Correo electrónico no válido.";
        header("Location: registro.php");
        exit();
    }

    // Preparar la consulta SQL
    $sql = "INSERT INTO registros (Nombre, `Correo electronico`, Telefono, Contrasena, fecha) 
        VALUES (:nombre, :email, :phone, :password, NOW())";

    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':password', $password);

    // Ejecutar la consulta y manejar el resultado
    if ($stmt->execute()) {
        $_SESSION['message'] = "Registro exitoso. Ahora puedes iniciar sesión.";
        header("Location: login.php"); // Redirige al login después de un registro exitoso
        exit();
    } else {
        $_SESSION['message'] = "Error al registrar el usuario.";
        header("Location: registro.php");
        exit();
    }
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container__header">
            <div class="logo">
                <a href="#">
                    <img src="" alt="">
                </a>
            </div>

            <div class="menu"> 
                <nav>
                    <ul>
                        <li><a href="#"><img src="./images/barra/menu (1).png" alt="Inicio" class="menu-icon"></a></li>
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Contactanos</a></li>
                        <li><a href="#">Mayoristas</a></li>
                        <li><a href="login.php" class="btn__quote">Acceso</a></li>
                        <li><a href="registro.php" class="btn__quote">Registro</a></li>
                        <li><a href="#"><img src="./images/barra/carrito-de-compras (1).png" alt="Agregar al carrito" class="menu-icon"></a></li>
                    </ul>
                </nav>

                <div class="socialMedia">
                    <a href="#">
                        <img src="./images/redes/instagram.png" alt="">
                    </a>
                    <a href="#">
                        <img src="./images/redes/facebook.png" alt="">
                    </a>
                    <a href="#">
                        <img src="assets/images/social media/twitter.png" alt="">
                    </a>
                    <a href="#">
                        <img src="assets/images/social media/youtube.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <br><br><br>
    <br><br><br>
    <div class="container__form">
        <h2>Registro</h2>

        <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="message">' . $_SESSION['message'] . '</p>';
            unset($_SESSION['message']); // Limpiar el mensaje después de mostrarlo
        }
        ?>
        <form action="registro.php" method="POST">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Correo electronico:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Telefono:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="password">Contrasena:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="btn__submit">Registrar</button>
        </form>
    </div>
</body>
</html>
