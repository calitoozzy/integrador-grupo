<?php
// llamo al archivo de conexión

include 'conexion.php';

//controlo la obtención y envío de valores del formulario registro.html
/*echo "<pre>";
var_dump($_POST);
echo "</pre>";

echo "<br>";
echo "************";
echo $_POST['nombre']; 
echo "************";

echo "<br>";

echo "************";
echo $_POST['apellido'];
echo "************";

echo "<br>";

echo "************";
echo $_POST['dni'];
echo "************";
echo "<br>";*/

//Guardo en memoria los valores obtenidos a través del metodo post según su clave
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['tel'];
$correo = $_POST['email'];
$password = $_POST['pass'];

//genero variable de consulta sobre el dni enviado en el post
$consulta = "SELECT dni,password FROM registro WHERE dni = '$dni' or password = '$password'";

//Hago la consulta pasandole los parámetros de conexión y la variable de consulta
$consultas = mysqli_query($conexion,$consulta);

//utilizo metodo de búsqueda y muestra que va presentando de a un registro a la vez, si tengo más uso el bucle While.
$listadoArray = mysqli_fetch_array($consultas);
/*echo "este es el dni encontrado en BD ". isset($listadoArray['dni'] );
echo "<br>";
*/

$id=$listadoArray['id_usuario'];
//Compruebo si existe el dni en la BD
if(isset($listadoArray['dni'] )&& isset($listadoArray['password'])){
    //echo "ya existe el usuario ". $listadoArray['nombre'] . " con dni " . $listadoArray['dni'];
} else {
    //echo "no existe el usuario";
 
     $insertar = "INSERT INTO registro(id_usuario, nombre, apellido, dni, telefono, correo, password) VALUES (null,'$nombre', '$apellido', '$dni', '$telefono', '$correo', '$password')";
     $insert = mysqli_query($conexion,$insertar); 
}

/*
if(!isset($insert)){

    echo "<br>";
    echo "no se ha insertado nada";
}else{
    echo "esta todo ok se inserto el dato";
}
*/
mysqli_close($conexion);

header('location: listado.php' );

?>