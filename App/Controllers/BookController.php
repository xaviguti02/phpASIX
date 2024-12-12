<?php
namespace App\Controllers;
use App\Models\Book;

class BookController {

    public function index() {
        $books = Book::all();
        require '../resources/views/books/index.blade.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Recull les dades del formulari
            $name = $_POST['name'];
            $author = $_POST['author'];
            $releaseYear = $_POST['releaseYear'];

            // Crea el llibre i el desa
            $newBook = new Book([
                'name' => $name,
                'author' => $author,
                'releaseYear' => $releaseYear
            ]);
            $newBook->save();

            // Redirigeix a la pàgina dels llibres
            header('Location: /books');
            exit();
        }

        // Si no s'ha enviat el formulari, mostra la vista de creació
        require '../resources/views/books/create.blade.php';
    }

    // Afegeix o modifica el mètode edit() al controlador

    public function edit($id) {
        $book = (new \App\Models\Book)->find($id);

        if (!$book) {
            // Si no es troba el llibre, redirigeix a la llista de llibres
            header('Location: /books');
            exit();
        }

        // Si el formulari s'ha enviat per POST, actualitza el llibre
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $book->name = $_POST['name'];
            $book->author = $_POST['author'];
            $book->releaseYear = $_POST['releaseYear'];
            $book->save();  // Guarda els canvis al model

            // Redirigeix després de l'actualització
            header('Location: /books');
            exit();
        }

        // Si és una petició GET, mostra la vista per editar el llibre
        require '../resources/views/books/edit.blade.php';
    }


    // Mètode per mostrar la confirmació de l'eliminació
    public function delete($id) {
        $book = (new \App\Models\Book)->find($id);
        if (!$book) {
            header('Location: /books');
            exit();
        }

        // Si el formulario ha sido enviado, elimina el libro
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $book->delete();
            // Redirige a la página de libros con un mensaje de éxito
            header('Location: /books');
            exit();
        }

        // Pasa el libro a la vista de confirmación de eliminación
        require '../resources/views/books/delete.blade.php';
    }

}
