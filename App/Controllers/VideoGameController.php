<?php
namespace App\Controllers;
use App\Models\VideoGame;

class VideoGameController {

    public function index() {
        // Obté tots els videojocs
        $videoGames = VideoGame::all();
        require '../resources/views/video_games/index.blade.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Recull les dades del formulari
            $name = $_POST['name'];
            $genre = $_POST['genre'];
            $releaseYear = $_POST['releaseYear'];

            // Crea el videojoc i el desa
            $newVideoGame = new VideoGame([
                'name' => $name,
                'genre' => $genre,
                'releaseYear' => $releaseYear
            ]);
            $newVideoGame->save();

            // Redirigeix a la pàgina dels videojocs
            header('Location: /video_games');
            exit();
        }

        // Si no s'ha enviat el formulari, mostra la vista de creació
        require '../resources/views/video_games/create.blade.php';
    }

    public function edit($id) {
        // Recupera el videojoc per id
        $videoGame = (new VideoGame)->find($id);

        if (!$videoGame) {
            // Si no es troba el videojoc, redirigeix a la llista
            header('Location: /video_games');
            exit();
        }

        // Si el formulari s'ha enviat per POST, actualitza el videojoc
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $videoGame->name = $_POST['name'];
            $videoGame->genre = $_POST['genre'];
            $videoGame->releaseYear = $_POST['releaseYear'];
            $videoGame->save();  // Guarda els canvis al model

            // Redirigeix després de l'actualització
            header('Location: /video_games');
            exit();
        }

        // Si és una petició GET, mostra la vista per editar el videojoc
        require '../resources/views/video_games/edit.blade.php';
    }

    public function delete($id) {
        // Recupera el videojoc per id
        $videoGame = (new VideoGame)->find($id);
        if (!$videoGame) {
            header('Location: /video_games');
            exit();
        }

        // Si el formulari ha estat enviat, elimina el videojoc
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $videoGame->delete();
            // Redirigeix a la pàgina de videojocs després d'eliminar
            header('Location: /video_games');
            exit();
        }

        // Passa el videojoc a la vista de confirmació de l'eliminació
        require '../resources/views/video_games/delete.blade.php';
    }
}

