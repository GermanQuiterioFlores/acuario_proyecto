<?php
$servername = "localhost";
$username = "id22058191_german";
$password = "GermanPro24042018!";
$dbname = "id22058191_german";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta los últimos datos registrados en la tabla "data"
$sql = "SELECT humidity, temperature FROM data ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $humidity = $row["humidity"];
    $temperature = $row["temperature"];

    // Devuelve los datos como un objeto JSON
    echo json_encode(["humidity" => $humidity, "temperature" => $temperature]);
} else {
    echo "No se encontraron datos.";
}

$conn->close();
?>
