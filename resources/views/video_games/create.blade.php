<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Videojoc</title>
    <link rel="stylesheet" type="text/css" href="/public/CSS/styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 10px 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, border 0.3s;
        }

        nav ul li a:hover {
            background-color: #0056b3;
            border: 1px solid #fff;
        }

        .container {
            padding: 40px;
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            transition: border 0.3s;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        input:focus {
            border-color: #007BFF;
            outline: none;
        }

        button {
            padding: 12px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
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

        @media (max-width: 768px) {
            header h1 {
                font-size: 1.5rem;
            }

            nav ul {
                flex-direction: column;
                gap: 10px;
            }

            .container {
                padding: 20px;
                margin: 20px auto;
            }
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

<div class="container">
    <h1>Crear Nou Videojoc</h1>
    <form method="POST" action="/video_games/create">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="genre">Gènere:</label>
        <input type="text" id="genre" name="genre" required><br>

        <label for="releaseYear">Any de llançament:</label>
        <input type="number" id="releaseYear" name="releaseYear" required><br>

        <button type="submit">Crear</button>
    </form>
</div>

<footer>
    <p>&copy; 2024 Demo ASIX. Tots els drets reservats.</p>
</footer>
</body>
</html>
