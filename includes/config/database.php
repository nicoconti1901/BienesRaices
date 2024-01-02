<?php

function conectarDB(): mysqli{
    $servidor = "localhost";
    $usuario = "root";
    $password = "nico1901";
    $bd = "bienesraices_crud";

    $conexion = mysqli_connect($servidor, $usuario, $password, $bd);

    if(!$conexion){
        echo "Error en la conexion";
        exit;
    }
    return $conexion;
}
