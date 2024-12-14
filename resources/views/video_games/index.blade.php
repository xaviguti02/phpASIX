<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojocs</title>
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
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #007BFF;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .create-button {
            display: inline-block;
            margin: 20px;
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .create-button:hover {
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
    </style>
</head>
<body>
<header>
    <h1>Videojocs</h1>
    <nav>
        <ul>
            <li><a href="/home">Inici</a></li> <!-- Botó per anar a la pàgina d'inici -->
            <li><a href="/books">Llibres</a></li>
            <li><a href="/video_games" class="active">Videojocs</a></li>
        </ul>
    </nav>
</header>
<main>
    <a href="/video_games/create" class="create-button">Crear nou videojoc</a>
    <table>
        <tr>
            <th>Nom</th>
            <th>Gènere</th>
            <th>Plataforma</th>
            <th>Any</th>
            <th>Preu</th>
            <th>Accions</th>
        </tr>
        <?php foreach ($videoGames as $videoGame): ?>
        <tr>
            <td><?php echo $videoGame->name; ?></td>
            <td><?php echo $videoGame->genre; ?></td>
            <td><?php echo $videoGame->platform; ?></td>
            <td><?php echo $videoGame->releaseYear; ?></td>
            <td><?php echo $videoGame->price; ?>€</td>
            <td>
                <a href="/video_games/edit/<?php echo $videoGame->id; ?>">Editar</a> |
                <a href="/video_games/delete/<?php echo $videoGame->id; ?>">Esborrar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</main>
<footer>
    <p>&copy; 2024 Demo ASIX. Tots els drets reservats.</p>
</footer>
</body>
</html>
