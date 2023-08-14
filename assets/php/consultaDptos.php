<?php

// include "conexion.php";


// // Crear la consulta para obtener los diferentes tipos de elementos del campo "dpto"
// $sql = "SELECT DISTINCT dpto FROM users"; // Utilizamos DISTINCT para obtener valores únicos

// $result = $conn->query($sql);
// $opciones = array();

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         // Agregar cada resultado a un array para construir las opciones del select
//         $opciones[] = $row['dpto'];
//         echo $row['dpto'];
//         echo " ";
//     }
// }

// echo json_encode($opciones);
// $conn->close();

function obtenerDpto (){

    include "conexion.php";

    $sql = "SELECT DISTINCT dpto FROM users";
    $result = $conn->query($sql);
    $opciones = array();
    
 if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Agregar cada resultado a un array para construir las opciones del select
        $opciones[] = array (
           'departamentos' => $row['dpto']
        ) ;
       // echo $row['dpto']."--";
        
    }
}
        
           $jsonencode = json_encode($opciones);
            echo $jsonencode;

            $conn->close();
}





function obtenerArea ($dpto){
   include "conexion.php";
   
   $sqlArea= "SELECT DISTINCT area FROM users WHERE dpto = '$dpto'";
   $result = $conn->query($sqlArea);
    $opciones = array();


    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          // Agregar cada resultado a un array para construir las opciones del select
          $opciones[] = array (
             'area' => $row['area']
          ) ;
         // echo $row['dpto']."--";
          
      }
  }

  $jsonencodeArea = json_encode($opciones);
  echo $jsonencodeArea;

  $conn->close();
}  


if (isset ($_POST['codigoDepto'])) {
   $dpto = $_POST['codigoDepto'];
   obtenerArea($dpto);

}else {

   obtenerDpto();
}

//echo "funcionando";
?>