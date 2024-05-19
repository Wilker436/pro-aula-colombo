<?php
include 'database.php';

if (isset($_POST['correo'])){
    $email = $_POST['correo'];
    $contraseña = $_POST['contrasena'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $na = $_POST['na'];
    $edad = $_POST['edad'];
    $celular = $_POST['celular'];


    // Verificar si el correo ya está registrado
    $check_query = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE email = ?");
    mysqli_stmt_bind_param($check_query, 's', $email);
    mysqli_stmt_execute($check_query);
    mysqli_stmt_store_result($check_query);

    if(mysqli_stmt_num_rows($check_query) > 0) {
        echo '
            <script>
                alert("¡El correo ya está registrado!");
                window.location = "../index.php";
            </script>
        ';
    } else {
      // El correo no está registrado, procede a insertar los datos
      $insert_query = mysqli_prepare($conexion, "INSERT INTO usuarios (email, contraseña, nombres, apellidos, Nacionalidad, edad, celular) VALUES (?, ?, ?, ?, ?, ?, ?)");
      mysqli_stmt_bind_param($insert_query, 'sssssss', $email, $contraseña, $nombres, $apellidos, $na, $edad, $celular);
      $ejecutar = mysqli_stmt_execute($insert_query);

      if($ejecutar){
          echo '
              <script>
                  alert("¡Registrado con éxito!");
                  window.location = "../index.php";
              </script>
          ';
      } else {
          echo '
              <script>
                  alert("¡Ha ocurrido un error al registrar!");
                  window.location = "../index.php";
              </script>
          ';
      }
    }
    mysqli_stmt_close($check_query);
    mysqli_stmt_close($insert_query);
    mysqli_close($conexion);
}
?>
