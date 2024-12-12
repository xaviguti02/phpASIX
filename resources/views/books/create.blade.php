<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo ASIX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fc;
        }
        header {
            background-color: #007BFF;
            color: white;
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
            margin-top: 15px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        nav ul li a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body class="bg-gray-100">
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
<section>
    <div class="max-w-3xl mx-auto bg-white shadow-xl rounded-lg py-6 sm:px-6 lg:px-8 mt-10">
        <h1 class="text-3xl font-bold mb-6 text-center">Afegir nou llibre</h1>
        <div>
            <form action="/books/create" method="POST">
                <div class="mb-6">
                    <label for="name" class="block text-lg font-medium text-gray-700">Títol</label>
                    <input type="text" name="name" id="name" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="author" class="block text-lg font-medium text-gray-700">Autor</label>
                    <input type="text" name="author" id="author" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="releaseYear" class="block text-lg font-medium text-gray-700">Any de publicació</label>
                    <input type="number" name="releaseYear" id="releaseYear" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">Crear</button>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
