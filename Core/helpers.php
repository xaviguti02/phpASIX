<?php
// Funcions globals
if (!function_exists('dd')) {
    function dd($var)
    {
        var_dump($var);
        die();
    }
}

if (!function_exists('url')) {
    function url($path)
    {
        // Ajusta el base URL segons la teva configuració
        $baseUrl = 'http://localhost';
        return $baseUrl . '/' . trim($path, '/');
    }
}
