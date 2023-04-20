<?php

$contraseña = "password=pchWOPmQqBlgDgKiN6i4";
$usuario = "user=postgres";
$nombreBaseDeDatos = "dbname=railway";

$rutaServidor = "host=containers-us-west-137.railway.app"; 
$puerto = "port=6939"; 
try { 
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
echo "Ocurrié un error con la base de datos: " . $e->getMessage();
}