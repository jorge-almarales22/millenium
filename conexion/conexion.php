<?php

    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $bd="pruebatecnica";

    $conexion= mysqli_connect($servidor, $usuario, $contraseña, $bd);
    if($conexion){
        echo "Conexion Exitosa";
    }else{
        echo "Error de conexion";
    }
?>