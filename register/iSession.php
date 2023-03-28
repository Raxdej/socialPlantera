<?php
include('../PHP_src/conect.php');

$Usser = $_POST["Usuario"];
$Pass = $_POST["Contrasena"];
session_start();
$_SESSION['Usuario'] = $Usser;

$consulta = "SELECT * FROM login WHERE Usser = '$Usser' AND Password='$Pass';";
$result = mysqli_query($connection, $consulta);
$row = $result -> fetch_assoc();

if($row){
    header("Location: index.php");
} else {
    header ("Location: sesion.php");
}

?>