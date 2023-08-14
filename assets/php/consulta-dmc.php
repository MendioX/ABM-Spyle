<?php
// incluir el archivo conexion.php
include "conexion.php";

// Obtener los valores de búsqueda

//  $campo = isset($_POST['form-control']) ? $conn ->real_escape_string($_POST['form-control']) : null;

$id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';
$status = isset($_POST['status']) ? mysqli_real_escape_string($conn, $_POST['status']) : '';
$apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($conn, $_POST['apellido']) : '';
$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conn, $_POST['nombre']) : '';
$dpto = isset($_POST['dpto']) ? mysqli_real_escape_string($conn, $_POST['dpto']) : '';
$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
$interno = isset($_POST['interno']) ? mysqli_real_escape_string($conn, $_POST['interno']) : '';

// Crear la consulta con los filtros de búsqueda
$sql = "SELECT * FROM users WHERE 
        id LIKE '%$id%' AND
        status LIKE '%$status%' AND
        surname LIKE '%$apellido%' AND
        name LIKE '%$nombre%' AND
        dpto LIKE '%$dpto%' AND
        email LIKE '%$email%' AND
        extension LIKE '%$interno%'
        "; // Limitamos a 20 registros como en el ejemplo anterior

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Iterar a través de los registros y mostrarlos como una tabla HTML
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "<td>" . $row["surname"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["dpto"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["extension"] . "</td>";
        echo "<td><button class='moreInfo'> + </button></td>";
        echo "<td><button class='changeStatus'>A/B</button></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No se encontraron registros.</td></tr>";
}

// Cierra la conexión
$conn->close();
?>
