<?php
session_start(); // Iniciar sesión

// Incluir el archivo de configuración de la base de datos
include 'database.php';

$email = $_POST['email'];
$password = $_POST['contrasea'];

// Consulta SQL para verificar las credenciales del usuario
$stmt = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE email = ?");
mysqli_stmt_bind_param($stmt, 's', $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if ($user) {
    // Verificar la contraseña
    if ($contraseña === $user['contraseña']) { // Comparación directa de contraseñas
        // Iniciar sesión correctamente
        $_SESSION['user'] = $user['email'];
        $_SESSION['id'] = $user['id'];

        // Redirigir al usuario a la página principal
        header("Location: ../index.php");
        exit;
    } else {
        // Contraseña incorrecta
        echo '<script>alert("Contraseña incorrecta. Intenta de nuevo."); window.location = "../index.php";</script>';
        exit;
    }
} else {
    // Usuario no encontrado
    echo '<script>alert("Usuario no encontrado. Intenta de nuevo."); window.location = "../index.php";</script>';
    exit;
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);