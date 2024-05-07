<?php
include 'database.php';

if (isset($_POST['email'], $_POST['contraseña'])){
$email = $_POST['correo'];
$contraseña = $_POST['contrasena'];

$check_query = mysqli_prepare($conexion, "INSERT INTO usuarios (email, contraseña) VALUES (?, ?) ");
mysqli_stmt_bind_param($check_query, 'ss',$email, $contraseña); // No hash de la contraseña
$ejecutar = mysqli_stmt_execute($check_query);

if($ejecutar){
    echo '
        <script>
            alert("Resgitrado con exito!");
        </script>
    ';
} else {
    echo '
        <script>
            alert("No eres tu somos nosotros!");
        </script>
    ';
}
}
mysqli_close($conexion);
