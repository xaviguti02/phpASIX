<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte PHP ASIX</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            background-image: url('images/image.jpg');
        }

        header {
            background-color: rgba(0, 123, 255, 0.8); /* Fons semitransparent per llegibilitat */
            color: #fff;
            padding: 20px 10px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 20px 0 0 0;
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            padding: 10px 15px;
            border: 1px solid transparent;
            border-radius: 5px;
            transition: background-color 0.3s, border 0.3s;
        }
        nav ul li a:hover {
            background-color: #0056b3;
            border: 1px solid #fff;
        }
        main {
            padding: 20px;
            text-align: center;
            z-index: 1;
            background: rgba(255, 255, 255, 0.7); /* Fons semitransparent per al text */
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <h1>Projecte PHP ASIX</h1>
    <nav>
        <ul>
            <li><a href="/home">Inici</a></li> <!-- Afegit l'enllaç a la pàgina d'inici -->
            <li><a href="/books">Llibres</a></li>
            <li><a href="/video_games">Videojocs</a></li>
        </ul>
    </nav>
</header>
<main>
    <p>Benvingut a la pàgina principal del meu projecte PHP ASIX. Selecciona una secció del menú per començar.</p>
    <p>En aquest projecte trobaràs informació sobre llibres i videojocs, així com una guia completa per explorar més opcions.</p>
    <p>Descobreix els recursos i gaudeix de l'experiència al màxim!</p>
</main>
<footer>
    <p>&copy; 2024 Projecte PHP ASIX. Tots els drets reservats.</p>
</footer>
</body>
</html>
