<?php

	$host = "localhost";
	$basededatos = "netflix";
	$usuario = "root";
	$contraseña = "";

    $conexion = new mysqli($host,$usuario,$contraseña,$basededatos);

    if($conexion->connect_errno){
    	echo "fallo la conexion a la base de datos";
    }

?>