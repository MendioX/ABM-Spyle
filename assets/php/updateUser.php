<?php

include "conexion.php"; // Asegúrate de que el archivo "conexion.php" esté en la misma ubicación o proporciona la ruta correcta si está en otro lugar.

$dataUser = $_POST['userData'];
//echo "datos recibidos -> " . implode(', ', $dataUser); // Agregamos un punto y coma al final de la línea y usamos implode para mostrar los datos recibidos.

$sql = "INSERT INTO users (name, surname, dpto, area, position, user_name, email, income_date, extension, pw_extension)
VALUES ('$dataUser[0]', '$dataUser[1]', '$dataUser[2]', '$dataUser[3]', '$dataUser[4]', '$dataUser[5]', '$dataUser[6]', '$dataUser[7]', '$dataUser[8]', '$dataUser[9]')"; // Agregamos el valor que falta en VALUES para completar la consulta SQL.

$opciones = array();
if ($conn->query($sql) === TRUE) {
    
    $opciones[] = array (
        'status' => "OK",
        'code' => "200",
        'description' => "Usuario creado con Exito"
     ) ;
    //echo "New record created successfully";
} else {
    $opciones[] = array (
        'status' => "ERROR",
        'code' => "404",
        'description' => "Error en Carga de Usuario"
     );
}


$jsonencodeUpdate = json_encode($opciones);

echo $jsonencodeUpdate;
$conn->close();
?>
