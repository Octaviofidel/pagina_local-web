<?php
session_start();
include 'connection_bd.php';

// Verificar si el usuario está logueado
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Conectar a la base de datos
    $conn = conectar();

    // Obtener el ID del usuario
    $id_usuario = $_SESSION['id'];

    // Preparar y ejecutar la consulta para eliminar la cuenta
    $sql = "DELETE FROM usuario WHERE id = $id_usuario";

    if (mysqli_query($conn, $sql)) {
        // Eliminar la sesión y redirigir al usuario a la página de inicio
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit;
    } else {
        echo "Error al eliminar la cuenta: " . mysqli_error($conn);
    }

    // Cerrar la conexión
    mysqli_close($conn);
} else {
    // Si el usuario no está logueado, redirigirlo a la página de inicio
    header("Location: index.php");
    exit;
}
?>
