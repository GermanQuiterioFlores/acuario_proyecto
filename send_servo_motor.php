<?php
// Puedes agregar aquí la lógica necesaria para controlar el servomotor
// Recibe el valor de control desde la solicitud POST
$controlValue = json_decode(file_get_contents('php://input'), true)['controlValue'];

if ($controlValue == 1) {
    // Lógica para girar el servomotor a la posición deseada
    // Puedes usar la biblioteca Servo.h o cualquier otra según tu configuración
    // Por ejemplo, si el objeto de tu servomotor se llama $myServo, podrías hacer:
    // $myServo->write(90); // Girar a 90 grados (ajusta según sea necesario)
    echo "Servomotor girado";
} else {
    echo "No se realizó ninguna acción";
}
?>
