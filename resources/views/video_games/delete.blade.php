<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar videojoc - Demo ASIX</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        header {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
            font-size: 2rem;
            color: #fff; /* Títol en blanc */
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 20px 0 0;
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
            border: 2px solid transparent;
            border-radius: 5px;
            transition: background-color 0.3s, border 0.3s;
        }
        nav ul li a:hover {
            background-color: #0056b3;
            border-color: #fff;
        }
        main {
            padding: 30px;
            text-align: center;
            max-width: 800px;
            margin: 30px auto;
        }
        h1 {
            color: #333;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        h3 {
            color: #555;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            width: 100%;
            max-width: 400px;
        }
        button {
            padding: 10px 20px;
            background-color: #FF4C4C;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
            margin-right: 10px;
        }
        button:hover {
            background-color: #e03e3e;
        }
        a {
            font-size: 1rem;
            color: #007BFF;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #007BFF;
            transition: background-color 0.3s, color 0.3s;
        }
        a:hover {
            background-color: #007BFF;
            color: #fff;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 15px;
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
            <li><a href="/home">Inici</a></li>
            <li><a href="/books">Llibres</a></li>
            <li><a href="/video_games">Videojocs</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Eliminar videojoc:</h1>
    <div>
        <h3>Estàs segur que vols eliminar el videojoc <strong><?= htmlspecialchars($videoGame->name) ?></strong>?</h3>
        <form method="POST">
            <button type="submit">Eliminar</button>
            <a href="/video_games">Cancelar</a>
        </form>
    </div>
</main>

<footer>
    <p>&copy; 2024 Demo ASIX. Tots els drets reservats.</p>
</footer>
</body>
</html>
