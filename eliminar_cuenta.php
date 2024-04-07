<?php
session_start();
include 'connection_bd.php';


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
   
    $conn = conectar();

   
    $id_usuario = $_SESSION['id'];

   
    $sql = "DELETE FROM usuario WHERE id = $id_usuario";

    if (mysqli_query($conn, $sql)) {
    
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit;
    } else {
        echo "Error al eliminar la cuenta: " . mysqli_error($conn);
    }


    mysqli_close($conn);
} else {
 
    header("Location: index.php");
    exit;
}
?>
