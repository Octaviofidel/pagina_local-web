<?php
function conectar(){
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $bd = "gorditasdonalola";
    $conn = mysqli_connect($host,$user,$pass, $bd);
    return $conn;   
}
?>