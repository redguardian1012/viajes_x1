<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $destino = htmlspecialchars($_POST['destino']);
    $fecha = htmlspecialchars($_POST['fecha']);

    // Aquí podrías guardar la información en una base de datos

    echo "<h1>Reserva Confirmada</h1>";
    echo "<p>Gracias, $nombre. Tu viaje a $destino ha sido reservado para el $fecha.</p>";
} else {
    echo "<p>Por favor, completa el formulario de reserva.</p>";
}
?>