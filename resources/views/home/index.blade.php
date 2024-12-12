<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo ASIX</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background-color: #007BFF;
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
    <h1>Demo ASIX</h1>
    <nav>
        <ul>
            <li><a href="/home">Inici</a></li> <!-- Afegit l'enllaç a la pàgina d'inici -->
            <li><a href="/books">Llibres</a></li>
            <li><a href="/video_games">Videojocs</a></li>
        </ul>
    </nav>
</header>
<main>
    <p>Benvingut a la pàgina principal de la demo ASIX. Selecciona una secció del menú per començar.</p>
</main>
<footer>
    <p>&copy; 2024 Demo ASIX. Tots els drets reservats.</p>
</footer>
</body>
</html>
