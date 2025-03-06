<?php
session_start();

// Contador de visitas usando sesiones
if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 1;
} else {
    $_SESSION['visitas']++;
}

$visitas = $_SESSION['visitas'];
$fecha_hora = date("d/m/Y H:i:s");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Cuarto de Sara</title>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos más minimalistas y equilibrados */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        header {
            background-color: #f8f1f1;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
       /* Logo */
.logo {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
}

.logo img {
    max-height: 140px; /* Aumenta ligeramente el tamaño */
    margin-right: 20px;
    border-radius: 50%; /* Forma circular para un aspecto más elegante */
    border: 3px solid #D291BC; /* Borde lavanda */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Sombra suave para resaltar */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Efecto al pasar el mouse */
}

.logo img:hover {
    transform: scale(1.1); /* Efecto de aumento al pasar el mouse */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Sombra más pronunciada */
}

        h1 {
            font-family: 'Pacifico', cursive;
            color:rgb(172, 135, 155);
            font-size: 50px;
        }
        .search-container input {
            padding: 8px;
            border-radius: 20px;
            border: 1px solid #ddd;
        }
        .social-links img {
            width: 25px;
            margin-left: 10px;
            nav {
    background-color: #E8A0BF; /* Rosa pastel suave */
    text-align: center;
    padding: 10px 0;
            }
}

nav ul li a {
    text-decoration: none;
    font-weight: bold;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background 0.3s;
}

nav ul li a:hover {
    background: rgba(255, 255, 255, 0.3);
}
          
        .welcome-section {
            text-align: center;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            margin: 20px auto;
            width: 90%;
            max-width: 800px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .product-gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }
        .product-item {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 200px;
        }
        .product-item img {
            width: 100%;
            border-radius: 10px;
        }
        footer {
            background-color: #f8f1f1;
            text-align: center;
            padding: 20px;
            color: #333;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <img src="assets/logo.jpg" alt="Logo">
    </div>
    <h1>Servicios de El Cuarto de Sara</h1>
    <div class="search-container">
        <input type="text" placeholder="Buscar...">
    </div>
    <div class="social-links">
    <a href="https://www.facebook.com/profile.php?id=100063458204117" target="_blank">
        <img class="social-icon" src="assets/facebook-icon.png" alt="Facebook">
    </a>
    <a href="https://www.instagram.com/el_cuarto_de_sara/" target="_blank">
        <img class="social-icon" src="assets/instagram-icon.png" alt="Instagram">
    </a>
</div>
</header>

<nav>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="contacto.php">Contacto</a></li>
       

    </ul>
</nav>
<main>
    <section class="servicios">
        <h1>Nuestros Servicios</h1>

        <div class="servicio">
            <h2>🎨 Personalización de Amigurumis</h2>
            <p>Te ofrecemos la posibilidad de personalizar los amigurumis según tu gusto. Puedes elegir colores, tamaños, personajes específicos o incluso agregar nombres bordados.</p>
        </div>

        <div class="servicio">
            <h2>🎁 Pedidos Especiales y Temáticos</h2>
            <p>¿Tienes un evento especial? Creamos amigurumis temáticos para cumpleaños, bodas, baby showers, eventos corporativos y festividades como Navidad.</p>
        </div>

        <div class="servicio">
            <h2>🧶 Talleres y Clases de Tejido</h2>
            <p>Aprende a tejer amigurumis con nuestros cursos personalizados. Clases presenciales y en línea para todos los niveles.</p>
        </div>

        <div class="servicio">
            <h2>🛠️ Restauración y Reparación de Amigurumis</h2>
            <p>¿Tu amigurumi favorito está dañado? Te ayudamos a restaurarlo para que vuelva a estar como nuevo.</p>
        </div>

        <div class="servicio">
            <h2>🏪 Venta al por Mayor y Colaboraciones</h2>
            <p>Si tienes una tienda o evento, podemos ofrecerte amigurumis al por mayor con diseños exclusivos.</p>
        </div>

        <div class="servicio">
            <h2>📦 Envíos Nacionales e Internacionales</h2>
            <p>Hacemos envíos a todo el país e internacionales. Consulta costos y tiempos de entrega.</p>
        </div>
    </section>
</main>

<style>
    /* 🔹 Estilos para la sección de servicios */
    

    .servicio {
        background: #FCE4EC;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        text-align: left;
    }

    .servicio h2 {
        color: #D291BC;
        font-size: 22px;
    }

    .servicio p {
        font-size: 16px;
        color: #555;
        line-height: 1.6;
    }
</style>

<footer>
    <p>&copy; 2025 El Cuarto de Sara</p>
</footer>
</body>
</html>
