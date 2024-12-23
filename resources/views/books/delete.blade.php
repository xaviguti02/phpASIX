<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar llibre - Demo ASIX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
            font-size: 2rem;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }
        nav ul li a:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        main {
            padding: 40px 20px;
            text-align: center;
        }
        .card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
        }
        .card h2 {
            font-size: 1.75rem;
            margin-bottom: 20px;
        }
        .card p {
            font-size: 1.125rem;
            margin-bottom: 30px;
        }
        button {
            padding: 12px 20px;
            background-color: #d9534f;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s, transform 0.2s;
        }
        button:hover {
            background-color: #c9302c;
            transform: scale(1.05);
        }
        .cancel-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            transition: color 0.3s;
        }
        .cancel-link:hover {
            color: #0056b3;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
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
    <div class="card">
        <h2>Eliminar llibre</h2>
        <p>Estàs segur que vols eliminar el llibre <strong><?= $book->name ?></strong>?</p>
        <form action="/books/delete/<?= $book->id ?>" method="POST">
            <button type="submit">Eliminar</button>
        </form>
        <a href="/books" class="cancel-link">Cancel·lar</a>
    </div>
</main>
<footer>
    <p>&copy; 2024 Demo ASIX. Tots els drets reservats.</p>
</footer>
</body>
</html>
