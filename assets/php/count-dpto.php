<?php

include "conexion.php";

$sql = "SELECT dpto, COUNT(*) AS cantidad_registros FROM users WHERE status='ACTIVO' GROUP BY dpto";


$result = $conn->query($sql);




if ($result->num_rows > 0) {

       // Generar una respuesta JSON con los resultados
       $rows = array();
       while ($row = $result->fetch_assoc()) {
           $rows[] = $row;
       }
      
      echo json_encode($rows);
    }
    
    $conn -> close();

?>