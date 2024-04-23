<?php
$servername = "localhost";
$username = "id22058191_german";
$password = "GermanPro24042018!";
$dbname = "id22058191_german";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener el valor del ángulo del servo del cuerpo de la solicitud POST
$servo_angle = $_POST['servo_angle'];

// Aquí puedes implementar la lógica para controlar físicamente el servo según el ángulo recibido
// Por ejemplo, puedes enviar este ángulo a un controlador de servo físico o actualizar un estado en la base de datos, dependiendo de tu configuración

// Aquí actualizamos un estado en la base de datos solo para propósitos de ejemplo
$sql = "UPDATE servo_status SET servo_state = $servo_angle WHERE id = 1";

if ($conn->query($sql) === TRUE) {
    echo "Servo controlado correctamente a $servo_angle grados.";
} else {
    echo "Error al controlar el servo: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
