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
    <h1>Productos de El Cuarto de Sara</h1>
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
    <section class="productos">
        <h1>Catálogo</h1>

        <div class="contenedor-principal">
            <!-- 🔹 Contenedor de Categorías a la izquierda -->
            <aside class="categorias-container">
                <h2>Categorías</h2>
                <?php 
                $categorias = [
                    "Religiosos" => [
                        ["imagen" => "assets/religioso1.jpg", "nombre" => "Virgen María Tejida", "precio" => "$45.000"],
                        ["imagen" => "assets/religioso2.jpg", "nombre" => "Jesucristo", "precio" => "$35.000"]
                    ],
                    "Llaveros" => [
                        ["imagen" => "assets/llavero1.jpg", "nombre" => "Llavero Pingüino", "precio" => "$15.000"],
                        ["imagen" => "assets/llavero2.jpg", "nombre" => "Llavero Duo Pingüino", "precio" => "$12.000"]
                    ],
                    "Muñecos" => [
                        ["imagen" => "assets/muneco1.jpg", "nombre" => "Muñecos Tejidos", "precio" => "$50.000"],
                        ["imagen" => "assets/muneco2.jpg", "nombre" => "Amigurumi Muñeca", "precio" => "$40.000"]
                    ],
                    "Muñecos de Navidad" => [
                        ["imagen" => "assets/navidad1.jpg", "nombre" => "Santa Claus Tejido", "precio" => "$55.000"],
                        ["imagen" => "assets/navidad2.jpg", "nombre" => "Bolitas Navideñas", "precio" => "$50.000"]
                    ]
                ];

                foreach ($categorias as $nombre_categoria => $productos) : ?>
                    <details class="categoria">
                        <summary><?php echo $nombre_categoria; ?></summary>
                        <div class="product-grid">
                            <?php foreach ($productos as $producto) : ?>
                                <div class="product-item">
                                    <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                                    <h4><?php echo $producto['nombre']; ?></h4>
                                    <p class="precio"><?php echo $producto['precio']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </details>
                <?php endforeach; ?>
            </aside>

            <!-- 🔹 Información del catálogo a la derecha -->
            <div class="info-catalogo">
                <h2>¿Qué son los Amigurumis?</h2>
                <p>Los <strong>amigurumis</strong> son adorables muñecos tejidos a crochet, originarios de Japón. Son confeccionados a mano con dedicación y amor, utilizando hilos de algodón, lana y relleno especial para darles su forma característica.</p>
                <p>Para crear estos muñecos, se utilizan técnicas de tejido en espiral y puntos básicos como el anillo mágico, el punto bajo y los aumentos y disminuciones. Cada pieza se teje por separado y luego se ensambla cuidadosamente.</p>
                <p><strong>Materiales principales:</strong></p>
                <ul>
                    <li>Hilos de algodón o lana de colores</li>
                    <li>Ganchillo de diferentes tamaños</li>
                    <li>Aguja lanera para coser las piezas</li>
                    <li>Relleno de fibra sintética</li>
                    <li>Ojitos de seguridad o bordados</li>
                </ul>
                <p>Cada pieza de nuestra colección es única y hecha a mano con mucho cariño. ¡Descubre nuestras creaciones a continuación!</p>
            </div>
        </div>
    </section>
</main>

<style>

    /* 🔹 Contenedor Principal */
    .contenedor-principal {
        display: flex;
        gap: 30px;
        align-items: flex-start;
    }

    /* 🔹 Categorías a la izquierda */
    .categorias-container {
        width: 30%;
        background: #FCE4EC;
        padding: 20px;
        border-radius: 10px;
    }

    h2 {
        text-align: center;
        color: #D291BC;
    }

    /* 🔹 Cada categoría */
    details {
        background: #E8A0BF;
        color: white;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 10px;
        cursor: pointer;
        transition: 0.3s;
    }

    summary {
        font-weight: bold;
        font-size: 18px;
    }

    details[open] {
        background: #D291BC;
    }

    /* 🔹 Productos en cada categoría */
    .product-grid {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        padding: 10px;
    }

    .product-item {
        background: white;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 100%;
        max-width: 200px;
    }

    .product-item img {
    width: 100%;
    height: 120px;
    object-fit: contain; /* Mantiene la imagen completa sin recortarla */
    border-radius: 10px;
}

    .product-item h4 {
        font-size: 16px;
        color: #555;
        margin: 5px 0;
    }

    .precio {
        font-size: 14px;
        font-weight: bold;
        color:rgb(107, 105, 105);
        background: #FDE2E4;
        display: inline-block;
        padding: 5px;
        border-radius: 5px;
    }

    /* 🔹 Información del catálogo a la derecha */
    .info-catalogo {
        width: 65%;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        text-align: left;
    }

    .info-catalogo p, .info-catalogo ul {
        font-size: 16px;
        line-height: 1.6;
        color: #333;
    }

    .info-catalogo ul {
        padding-left: 20px;
    }

    .info-catalogo li {
        margin-bottom: 5px;
    }
</style>

<footer>
    <p>Contacto: Alquería, Bogotá | Teléfono: 311 2458668 | Email: tatis.angelr@gmail.com</p>
    <p>Fecha y Hora: <?php echo $fecha_hora; ?></p>
    <p>Visitas: <?php echo $visitas; ?></p>
</footer>
</body>
</html>
