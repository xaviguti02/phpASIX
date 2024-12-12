<?php
//fitxer per definir les rutes
return [
    '/' => '../App/Controllers/HomeController.php@index',
    '/home' => '../App/Controllers/HomeController.php@index',
    '/index' => '../App/Controllers/HomeController.php@index',
    '/index.php' => '../App/Controllers/HomeController.php@index',

    '/books' => '../App/Controllers/BookController.php@index',
    '/books/create' => '../App/Controllers/BookController.php@create',
    '/books/edit/{id}' => '../App/Controllers/BookController.php@edit',
    '/books/delete/{id}' => '../App/Controllers/BookController.php@delete',

    '/video_games' => '../App/Controllers/VideoGameController.php@index',
    '/video_games/create' => '../App/Controllers/VideoGameController.php@create',
    '/video_games/edit/{id}' => '../App/Controllers/VideoGameController.php@edit',
    '/video_games/delete/{id}' => '../App/Controllers/VideoGameController.php@delete',
];

