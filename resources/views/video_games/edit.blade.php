<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar videojoc - Demo ASIX</title>
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
            padding: 20px 10px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
            font-size: 2rem;
            color: #fff;
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
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            width: 100%;
            max-width: 500px;
            text-align: left;
        }
        div {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            margin-bottom: 15px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        input:focus {
            border-color: #007BFF;
            outline: none;
        }
        button {
            padding: 12px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background-color 0.3s;
            width: 100%;
        }
        button:hover {
            background-color: #218838;
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
    <h1>Editar videojoc: <?= htmlspecialchars($game->name) ?></h1>
    <div>
        <form method="POST">
            <div>
                <label for="name">Nom del videojoc:</label>
                <input type="text" id="name" name="name" value="<?= htmlspecialchars($videoGame->name) ?>" required>
            </div>
            <div>
                <label for="price">Preu:</label>
                <input type="number" id="price" name="price" value="<?= htmlspecialchars($videoGame->price) ?>" step="0.01" required>
            </div>
            <div>
                <label for="platform">Plataforma:</label>
                <input type="text" id="platform" name="platform" value="<?= htmlspecialchars($videoGame->platform) ?>" required>
            </div>
            <div>
                <label for="genre">Gènere:</label>
                <input type="text" id="genre" name="genre" value="<?= htmlspecialchars($videoGame->genre) ?>" required>
            </div>
            <div>
                <label for="releaseYear">Any de llançament:</label>
                <input type="number" id="releaseYear" name="releaseYear" value="<?= htmlspecialchars($videoGame->releaseYear) ?>" required>
            </div>
            <button type="submit">Guardar canvis</button>
        </form>
    </div>
</main>

<footer>
    <p>&copy; 2024 Demo ASIX. Tots els drets reservats.</p>
</footer>
</body>
</html>
