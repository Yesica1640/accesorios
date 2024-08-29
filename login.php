<?php
session_start(); // Iniciar sesión para almacenar mensajes

include 'conexion.php'; // Incluye tu archivo de conexión a la base de datos

$login_success = false;
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; 
    $password = $_POST['password'];

    // Consulta SQL para seleccionar el usuario con el email proporcionado
    $sql = "SELECT * FROM registros WHERE `Correo electronico` = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    // Obtiene el usuario
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica la contraseña
    if ($user && password_verify($password, $user['Contrasena'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['Nombre'];
        $login_success = true;

        // Redirigir al index.php después de 2 segundos
        header("refresh:2;url=index.php");
    } else {
        $error_message = "Correo o contraseña incorrectos.";
    }
}
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>
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
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Contáctanos</a></li>
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
    <div class="container__cover div__offset">
        <section id="login">
            <div class="container__form">
                <h2>Acceso</h2>
                <form action="login.php" method="POST">
                    <label for="login-email">Correo electronico:</label>
                    <input type="email" id="login-email" name="email" required>
        
                    <label for="login-password">Contrasena:</label>
                    <input type="password" id="login-password" name="password" required>
        
                    <button type="submit" class="btn__submit">Iniciar Sesión</button>
                </form>

                <p class="register-link">¿No tienes cuenta? <a href="registro.php">¡Regístrate aquí!</a></p>
            </div>
        </section>
    </div>

    <script>
        function handleLogin(event) {
            event.preventDefault(); // Previene el envío normal del formulario
            
            const form = event.target;
            const formData = new FormData(form);
    
            fetch(form.action, {
                method: form.method,
                body: formData,
            }).then(response => {
                if (response.ok) {
                    window.location.href = 'index.php'; // Redirige a la página de inicio
                } else {
                    // Manejar errores si el inicio de sesión falla
                    alert('Error al iniciar sesión. Por favor, verifique sus credenciales.');
                }
            });
    
            return false; // Previene el envío del formulario
        }
    </script>
</body>
</html>
