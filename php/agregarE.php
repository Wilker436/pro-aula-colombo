<?php

include 'database.php';

// Verificar si los datos han sido enviados mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST["Nombre"];
    $lider = $_POST["lider"];
    $fecha = $_POST["fecha"];
    $precio = $_POST["precio"];
    $cupos = $_POST["cupos"];
    $textoBienvenida = $_POST["textoBienvenida"];
    $textoPrincipal = $_POST["textoPrincipal"];
    $Lugar1 = $_POST["Lugar1"];
    $Lugar2 = $_POST["Lugar2"];
    $Lugar3 = $_POST["Lugar3"];
    $Lugar4 = $_POST["Lugar4"];
    $Lugar5 = $_POST["Lugar5"];
    $imagen = $_FILES["Imagen"]["name"]; // Nombre del archivo de la imagen principal

    // Directorio donde se guardarán los archivos subidos
    $imagenDir = 'D:\xampp\htdocs\proyectoAula\imagenes\Destinos\\';
    $lugaresDir = 'D:\xampp\htdocs\proyectoAula\imagenes\Lugares\\';

    // Mover la imagen principal a la ubicación deseada
    $imagenPath = $imagenDir . $imagen;
    if (move_uploaded_file($_FILES["Imagen"]["tmp_name"], $imagenPath)) {
        echo "La imagen principal $imagen ha sido subida y movida correctamente.<br>";
    } else {
        echo "Hubo un error al mover la imagen principal $imagen.<br>";
    }

    // Inicializar variables para almacenar los nombres de los archivos de los lugares
    $fotoLugar11 = $fotoLugar12 = $fotoLugar13 = $fotoLugar14 = "";
    $fotoLugar21 = $fotoLugar22 = $fotoLugar23 = $fotoLugar24 = "";
    $fotoLugar31 = $fotoLugar32 = $fotoLugar33 = $fotoLugar34 = "";
    $fotoLugar41 = $fotoLugar42 = $fotoLugar43 = $fotoLugar44 = "";
    $fotoLugar51 = $fotoLugar52 = $fotoLugar53  = "";

    // Recorrer cada archivo enviado en el formulario
    foreach ($_FILES as $key => $file) {
        // Verificar si no es la imagen principal y no hay errores en la carga del archivo
        if ($key !== "Imagen" && $file['error'] === UPLOAD_ERR_OK) {
            // Obtener el nombre del archivo
            $filename = basename($file["name"]);
            // Almacenar el nombre del archivo en la variable correspondiente
            if ($key == "fotoLugar11") $fotoLugar11 = $filename;
            if ($key == "fotoLugar12") $fotoLugar12 = $filename;
            if ($key == "fotoLugar13") $fotoLugar13 = $filename;
            if ($key == "fotoLugar14") $fotoLugar14 = $filename;
            if ($key == "fotoLugar21") $fotoLugar21 = $filename;
            if ($key == "fotoLugar22") $fotoLugar22 = $filename;
            if ($key == "fotoLugar23") $fotoLugar23 = $filename;
            if ($key == "fotoLugar24") $fotoLugar24 = $filename;
            if ($key == "fotoLugar31") $fotoLugar31 = $filename;
            if ($key == "fotoLugar32") $fotoLugar32 = $filename;
            if ($key == "fotoLugar33") $fotoLugar33 = $filename;
            if ($key == "fotoLugar34") $fotoLugar34 = $filename;
            if ($key == "fotoLugar41") $fotoLugar41 = $filename;
            if ($key == "fotoLugar42") $fotoLugar42 = $filename;
            if ($key == "fotoLugar43") $fotoLugar43 = $filename;
            if ($key == "fotoLugar44") $fotoLugar44 = $filename;
            if ($key == "fotoLugar51") $fotoLugar51 = $filename;
            if ($key == "fotoLugar52") $fotoLugar52 = $filename;
            if ($key == "fotoLugar53") $fotoLugar53 = $filename;

            // Mover las imágenes de los lugares a la ubicación deseada
            $lugarPath = $lugaresDir . $filename;
            if (move_uploaded_file($file["tmp_name"], $lugarPath)) {
                echo "<link rel='stylesheet' href='index.css'>";
                echo "<div class='exi'></div>";
            } else {
                echo "Hubo un error al mover la imagen del lugar $filename.<br>";
            }
        }
    }

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO destinos (
        nombre, lider, fecha, precio, imagen, cupos, textoBienvenida, textoPrincipal, 
        Lugar1, fotoLugar11, fotoLugar12, fotoLugar13, fotoLugar14, 
        Lugar2, fotoLugar21, fotoLugar22, fotoLugar23, fotoLugar24, 
        Lugar3, fotoLugar31, fotoLugar32, fotoLugar33, fotoLugar34, 
        Lugar4, fotoLugar41, fotoLugar42, fotoLugar43, fotoLugar44, 
        Lugar5, fotoLugar51, fotoLugar52, fotoLugar53
    ) VALUES (
        '$nombre', '$lider', '$fecha', '$precio', '$imagen', '$cupos', '$textoBienvenida', '$textoPrincipal', 
        '$Lugar1', '$fotoLugar11', '$fotoLugar12', '$fotoLugar13', '$fotoLugar14', 
        '$Lugar2', '$fotoLugar21', '$fotoLugar22', '$fotoLugar23', '$fotoLugar24', 
        '$Lugar3', '$fotoLugar31', '$fotoLugar32', '$fotoLugar33', '$fotoLugar34', 
        '$Lugar4', '$fotoLugar41', '$fotoLugar42', '$fotoLugar43', '$fotoLugar44', 
        '$Lugar5', '$fotoLugar51', '$fotoLugar52', '$fotoLugar53'
    )";

    if ($conexion->query($sql) === TRUE) {
        echo '
              <script>
                  alert("¡Registrado con éxito!");
                  window.location = "../admin.html";
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

    $conexion->close();
}
?>
