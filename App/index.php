<?php

use Core\App;

    $greeting = "Hello";

    $a = 5;
    $b = 2;

    //consultem els registres e la taula video_games de la base de dades
    $books = App::get('database')->selectAll('video_games');

    //cridem a la vista
    require '../resources/views/index.blade.php';