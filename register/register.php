<?php
if (array_key_exists('Registrar', $_GET)){
    include("../PHP_src/conect.php");
    $user = $_GET['Usuario'];
    $Pass = $_GET['contrasena'];
    $cPass = $_GET['cContrasena'];

    if ($Pass == $cPass){
        echo '<script> alert("PURO PINCHE CARTEL DE SANTA ALV!!"); </script>';

        // Pasa a MAYUSCULA
        $user_ = mb_strtoupper($user);
        $query = "insert into login values ('$user_', '$Pass');";
       $result = mysqli_query($connection, $query); 

    } else {
        echo '<script> alert("Contraseña no coincidente, intentelo de nuevo"); </script>';
    }

}

?>