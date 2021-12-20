<?php


$conexion = mysqli_connect("localhost","root","","curso_php_c2164", 3308);

if(mysqli_connect_errno()){
    
    echo "fallo: ". mysqli_connect_errno();

}
/*else{
    echo "se conecto perfecto desde un archivo aparte";
}*/

?>