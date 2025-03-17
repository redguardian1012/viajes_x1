<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Viaje</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Reservar tu Viaje</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="reservar.php">Reservar Viaje</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <form action="procesar_reserva.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

             <!--en este formulario me falta ingresar el impit de el mail  -->

            <label for="destino">Destino:</label>
            <select id="destino" name="destino" required>
                <option value="paris">París</option>
                <option value="cancun">Cancún</option>
            </select>

            <label for="fecha">Fecha de Viaje:</label>
            <input type="date" id="fecha" name="fecha" required>

            <button type="submit">Reservar</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2025 Agencia de Viajes</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>