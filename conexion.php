<?php
// db.php
$host = 'localhost';
$dbname = 'accesorios';
$username = 'root'; // Ajusta esto si usas un nombre de usuario diferente
$password = ''; // Deja esto en blanco si no hay contraseña para MySQL en localhost

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configura el manejo de errores de PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error al conectar a la base de datos: ' . $e->getMessage();
    exit();
}
?>
