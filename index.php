<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Viajes</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Bienvenido a nuestra Agencia de Viajes</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="reservar.php">Reservar Viaje</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <h2>Ofertas de Viajes</h2>
        <div class="oferta">
            <h3>Viaje a París</h3>
            <p>Disfruta de una semana en la ciudad del amor.</p>
            <button onclick="alert('¡Reserva tu viaje a París!')">Más Información</button>
        </div>
        <div class="oferta">
            <h3>Vacaciones en Cancún</h3>
            <p>Relájate en las playas de Cancún.</p>
            <button onclick="alert('¡Reserva tus vacaciones en Cancún!')">Más Información</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Agencia de Viajes</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>