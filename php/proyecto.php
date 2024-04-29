<?php
include 'database.php';

$email = $_POST['correo'];

// Check if the email already exists

$check_query = mysqli_prepare($conexion, "SELECT COUNT(*) FROM users WHERE email = ?");
//put  's' and ? for each variable of your table
mysqli_stmt_bind_param($check_query, 's', $email);
mysqli_stmt_execute($check_query);
mysqli_stmt_bind_result($check_query, $count);
mysqli_stmt_fetch($check_query);
mysqli_stmt_close($check_query); // Close the result set

//Check if that email exits
//alert to confirm
//hola me gustan lso gatos
if ($count > 0) {
    echo '
        <script>
            alert("El correo ya está registrado.");
            window.location = "../index.html";
        </script>
    ';
} else {
    $stm = mysqli_prepare($conexion, "INSERT INTO users (email) VALUES (?)");
    mysqli_stmt_bind_param($stm, 's', $email);
    $ejecutar = mysqli_stmt_execute($stm);
    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado correctamente!");
                window.location = "../index.html";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Ha ocurrido un error al intentar almacenar el usuario.");
                window.location = "../index.html";
            </script>
        ';
    }
}
mysqli_close($conexion);
?>