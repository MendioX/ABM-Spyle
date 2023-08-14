<?php
// Incluye el archivo de conexión
include "conexion.php";

// Consulta para obtener los últimos 20 registros de la base de datos


$columns = ['id', 'status', 'surname', 'name', 'dpto','email','extension'];
$campo = isset($_POST['form-control']) ? $conn ->real_escape_string($_POST['form-control']) : null;


$where = '';

if ($campo != null) {
    $where = "WHERE (";

    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}


if ($campo == null) {
    $sql = "SELECT * FROM users ORDER BY id DESC LIMIT 50";
    $result = $conn->query($sql); 
}else{

    $result = $conn->query("SELECT * FROM users ".$where);
}



if ($result->num_rows > 0) {
    // Iterar a través de los registros y mostrarlos
    while ($row = $result->fetch_assoc()) {
        // Mostrar los datos como desees, por ejemplo:
        echo "<tr><td>" . $row["id"] .
        "</td><td>" . $row["status"] .
        "</td><td>" . $row["surname"] . 
        "</td><td>". $row["name"] .
        //", User: " . $row["user_name"] .
        "</td><td>" . $row["dpto"]. 
        "</td><td>" . $row["email"]. 
        //", Area: " . $row["area"] .
       // ", Cargo: " . $row["position"] .
        "</td><td>" . $row["extension"] .
        "</td><td> <button class='moreInfo'> + </button>".
        "</td><td> <button class='changeStatus'>A/B</button>".
        // ", Pw: " . $row["pw_extension"] . 
        "</td></tr>";
    }
} else {
    echo "No se encontraron registros.";
}

// Cierra la conexión
$conn->close();
?>

