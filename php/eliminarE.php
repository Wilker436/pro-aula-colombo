<?php
include 'database.php';

$id = (int) $_POST['id'];

// Perform the SELECT query
$consulta = "SELECT Nombre FROM destinos WHERE id = '$id'";
$select_result = mysqli_query($conexion, $consulta);

if ($select_result && mysqli_num_rows($select_result) > 0) {
    // Record exists, fetch the Nombre field
    $row = mysqli_fetch_assoc($select_result);
    $nombre = $row['Nombre'];

    // Perform the DELETE query on the destinos table
    $query = "DELETE FROM destinos WHERE id = '$id'"; 
    $delete_result = mysqli_query($conexion, $query);

    if ($delete_result) {
        // Perform the DELETE query on the carrito table
        $consulta2 = "DELETE FROM carrito WHERE excursion = '$nombre'";
        $delete_carrito_result = mysqli_query($conexion, $consulta2);

        if ($delete_carrito_result) {
            if (mysqli_affected_rows($conexion) > 0) {
                echo "
                      <script>
                          alert('¡Eliminada con éxito! Excursión: $nombre');
                          window.location = '../admin.html';
                      </script>
                  ";
            } else {
                echo "
                      <script>
                          alert('¡Eliminada con éxito! No había elementos relacionados en el carrito.');
                          window.location = '../admin.html';
                      </script>
                  ";
            }
        } else {
            echo "
                  <script>
                      alert('¡Error al intentar eliminar los elementos del carrito relacionados con la excursión: $nombre!');
                      window.location = '../admin.html';
                  </script>
              ";
        }
    } else {
        echo "<h1>Error al eliminar la excursión</h1>";
    }
} else {
    // Record does not exist
    echo '
    <script>
        alert("¡La excursión no existe!");
        window.location = "../index.php";
    </script>
    ';
}

mysqli_close($conexion);
?>
