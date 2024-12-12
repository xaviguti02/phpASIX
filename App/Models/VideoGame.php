<?php
namespace App\Models;

use Core\App;
use PDO;

class VideoGame {
    protected static $table = "video_games";  // Nom de la taula

    public $id;
    public $name;
    public $genre;
    public $releaseYear;

    public function __construct($data = []) {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->name = $data['name'];
        $this->genre = $data['genre'];
        $this->releaseYear = $data['releaseYear'];
    }

    public function save() {
        $db = App::get('database')->getConnection();
        if ($this->id) {
            // Actualitza
            $statement = $db->prepare('UPDATE ' . static::$table . ' SET name = :name, genre = :genre, releaseYear = :releaseYear WHERE id = :id');
            $statement->bindValue(':id', $this->id);
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':genre', $this->genre);
            $statement->bindValue(':releaseYear', $this->releaseYear);
            $statement->execute();
        } else {
            // Crea
            $statement = $db->prepare('INSERT INTO ' . static::$table . ' (name, genre, releaseYear) VALUES (:name, :genre, :releaseYear)');
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':genre', $this->genre);
            $statement->bindValue(':releaseYear', $this->releaseYear);
            $statement->execute();

            if (!$this->id) {
                $this->id = $db->lastInsertId();
            }
        }
    }

    public static function all() {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table);
        $statement->execute();
        $videoGames = [];
        $results = $statement->fetchAll();
        foreach ($results as $result) {
            $videoGames[] = new self($result);
        }
        return $videoGames;
    }

    public function find($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
        $data = $statement->fetch();
        return $data ? new self($data) : null;
    }

    public function delete() {
        // Esborra el videojoc utilitzant la seva pròpia propietat id
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $this->id);
        $statement->execute();
    }
}

