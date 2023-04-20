<?php

$contraseña = "pchWOPmQqBlgDgKiN6i4";
$usuario = "postgres";
$nombreBaseDeDatos = "railway";

$rutaServidor = "containers-us-west-137.railway.app"; 
$puerto = "6939";
   /* function conexion(){

    $host = "host=containers-us-west-137.railway.app";
	$port = "port=6939";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=pchWOPmQqBlgDgKiN6i4";
    $db = pg_connect("$host $port $dbname $user $password");
    return $db;
    }*/


try { 
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
echo "Ocurrié un error con la base de datos: " . $e->getMessage();
}
?>*/