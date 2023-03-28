<?php
if (array_key_exists('Registrar', $_GET)){
    include("../PHP_src/conect.php");
    $user = $_GET['Usuario'];
    $Pass = $_GET['contrasena'];
    $cPass = $_GET['cContrasena'];

    if ($Pass == $cPass){
        // Pasa a MAYUSCULA
        $user_ = mb_strtoupper($user);

        $query = "SELECT * FROM login WHERE Usser = '$user'";
        $result = mysqli_query($connection, $query);
        $row = $result -> fetch_assoc();

        if($row){
            echo "<script> alert('ALERTA! Nombre de usuario ya registrado.') 
            location.assign('../sesion.php');
            </script>";
            
        } else {
            echo '<script> alert("Usuario registrado correctamente"); </script>';
            $query = "insert into login values ('$user_', '$Pass');";
            $result = mysqli_query($connection, $query); 
            header ("Location: ../sesion_.php");
        }

    } else {
        echo '<script> alert("Contraseña no coincidente, intentelo de nuevo"); </script>';
    }

}
?>