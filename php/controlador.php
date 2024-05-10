<?php
    include 'database.php';

    if(isset($_POST["ingresar"])) {
        $email = $_POST["correo"];
        $contraseña = $_POST["contrasena"];

        // Validación simple de correo electrónico
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script>alert("Correo electrónico no válido.");  window.location = "../index.php";</script>';
            exit(); // Salir del script para evitar que se ejecute el código restante
        }

        // Aquí deberías utilizar sentencias preparadas para evitar SQL Injection
        $sql = $conexion->prepare("SELECT id FROM usuarios WHERE email=? AND contraseña=?");
        $sql->bind_param("ss", $email, $contraseña);
        $sql->execute();
        $resultado = $sql->get_result();

        if ($resultado->num_rows > 0) {

            session_start(); // Iniciar la sesión si no ha sido iniciada
            $usuario = $resultado->fetch_assoc(); // Obtener los datos del usuario
            $_SESSION['id'] = $usuario['id']; // Guardar el ID del usuario en la sesión
            echo '<script>alert("¡Inicio de sesión con éxito!"); window.location = "../excursion.php";</script>';
            exit(); // Salir del script después de redirigir

            
        } else {
            echo '<script>alert("¡Correo electrónico o contraseña incorrectos!"); window.location = "../index.php";</script>';
            exit(); // Salir del script después de redirigir
        }
    }
?>