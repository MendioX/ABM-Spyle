<?php

include "conexion.php";
$idtest= 15;
$id = $_POST['idQuery'];
$sql = "SELECT * FROM users WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Generar una respuesta JSON con los resultados
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    } else {
        echo "No se encontraron resultados.";
    }

    $conn->close();
?>