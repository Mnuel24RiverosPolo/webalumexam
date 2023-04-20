<?php
/*
Este archivo inserta los datos enviados a través de formulario.php
*/
?>
<?php
#Salir si alguno de los datos no está presente
if (!isset($_POST["nombre"]) || !isset($_POST["edad"])) {
    exit();
}
include_once "base_de_datos.php";
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];

#Si todo va bien, se ejecuta esta parte del código...
/*
include_once "base_de_datos.php";
$con = conexion();
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];

$sql = "insert into mascotas values(default,'$nombre','$edad')";
pg_query($con, $sql);

header("location:formulario.php");

*/
/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código*/
 
$sentencia = $base_de_datos->prepare("INSERT INTO mascotas(nombre, edad) VALUES (?, ?);");
$resultado = $sentencia->execute([$nombre, $edad]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
    # Redireccionar a la lista
	header("Location: listar.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}
