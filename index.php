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
    <h1>Bienvenidos a El Cuarto de Sara</h1>
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
<div class="main-image-container">
    <img src="assets/hilos.png" alt="Imagen Principal" class="main-image">
</div>
<main class="main-container">
    <!-- Sección de bienvenida -->
    <section class="welcome-section">
    <div class="intro-content">
        
        <p>Tu tienda de <strong>amigurumis hechos a mano</strong> con amor ❤️.</p>
        <p>En <strong>El Cuarto de Sara</strong>, encontrarás una hermosa selección de <strong>amigurumis</strong>, hechos con materiales de alta calidad, ideales para regalos y colecciones.</p>
        <p>¿Qué encontrarás en nuestra tienda?</p>
        <ul>
            <li>🧸 <strong>Amigurumis personalizados</strong> y temáticos.</li>
            <li>🛍 <strong>Productos exclusivos</strong> hechos a mano.</li>
            <li>🎁 <strong>Pedidos especiales</strong> y personalización.</li>
            <li>📞 <strong>Atención directa</strong> para consultas y cotizaciones.</li>
        </ul>
        <a href="productos.php" class="btn">Descubrir Productos</a>
    </div>
    
</section>


    <!-- Carrusel de productos -->
    <section class="product-gallery">
        <div class="carousel">
            <button class="prev">&#10094;</button>
            <div class="carousel-container">
                <div class="product-item">
                    <img src="assets/producto1.jpg" alt="Producto 1">
                    <h3>Amigurumi Vaca</h3>
                    <p>$15.000 COP</p>
                </div>
                <div class="product-item">
                    <img src="assets/producto2.jpg" alt="Producto 2">
                    <h3>Amigurumi Elefante</h3>
                    <p>$18.000 COP</p>
                </div>
                <div class="product-item">
                    <img src="assets/producto3.jpg" alt="Producto 3">
                    <h3>Amigurumi Jirafa</h3>
                    <p>$20.000 COP</p>
                </div>
            </div>
            <button class="next">&#10095;</button>
        </div>
    </section>
</main>






<footer>
    <p>Contacto: Alquería, Bogotá | Teléfono: 311 2458668 | Email: tatis.angelr@gmail.com</p>
    <p>Fecha y Hora: <?php echo $fecha_hora; ?></p>
    <p>Visitas: <?php echo $visitas; ?></p>
</footer>
</body>
</html>
