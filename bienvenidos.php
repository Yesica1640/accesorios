<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php include 'bienvenidos.php'; ?>
    <div class="container__form">
        <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h2>
        <p>Has iniciado sesión correctamente.</p>
        <a href="logout.php" class="btn__submit">Cerrar Sesión</a>
    </div>
</body>
</html>

