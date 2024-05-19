<?php
session_start();
    if(!empty($_POST["btningresar"])){


        if (!empty($_POST["correo"])  and !empty($_POST["contrasena"])) {

            $correo = $_POST["correo"];
            $contra = $_POST["contrasena"];

            $sql = $conexion->query(" SELECT * FROM usuarios WHERE email='$correo' and contraseña='$contra'");
            
            if ($datos=$sql->fetch_object()) {
                $_SESSION["id"]=$datos->id;
                $_SESSION["email"]=$datos->email;
                $_SESSION["contraseña"]=$datos->contraseña;
                $_SESSION["nombres"]=$datos->nombres;
                $_SESSION["apellidos"]=$datos->apellidos;
                $_SESSION["Nacionalidad"]=$datos->Nacionalidad;
                $_SESSION["edad"]=$datos->edad;
                $_SESSION["celular"]=$datos->celular;
                header("location: index.php");
            } else {
                echo "<div class='alert'> <h1 id='alert'>acceso no concedido  </h1> <i class='fa-solid fa-circle-exclamation fa-bounce fa-2xl' style='color: #d2421e; font-size: 50px;' ></i>   </div>";
            }
            
            
          }else{
            echo '<h1> Campos vacios  </h1>';
        }

    }
?>