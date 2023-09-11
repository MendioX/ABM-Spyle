<?php

include "conexion.php";

$id = $_POST['idQuery'];
$name = $_POST['nameColum'];
$surname = $_POST['surnameColum'];


 $sqlCheck="SELECT status FROM users WHERE id='$id' AND surname='$surname' AND name='$name'";

$result = $conn->query($sqlCheck);

//echo $result;


if ($result->num_rows > 0) {

       // Generar una respuesta JSON con los resultados
       $rows = array();
       while ($row = $result->fetch_assoc()) {
           $rows[] = $row;
       }
       //echo $rows;
       json_encode($rows);

    //    if ($rows[0]['status'] == "ACTIVO") {
    //     # code...
    //     echo "funciona";
    //    }

if ($rows[0]['status'] == "ACTIVO") {
    $sqlFalse = "UPDATE users SET status = 'BAJA' WHERE id = '$id'"; 
    $resultFalse = $conn->query($sqlFalse);

    echo ("BAJA USUARIO"." : ".$resultFalse);
}elseif($rows[0]['status'] == "BAJA"){
    $sqlTrue = "UPDATE users SET status = 'ACTIVO' WHERE id = '$id'"; 
    $resultTrue = $conn->query($sqlTrue);

    echo ("ACTIVO USUARIO"." : ".$resultTrue);
}else{

    echo ("Informacion corrupta en la Consulta");

}  
}
$conn->close();

?>