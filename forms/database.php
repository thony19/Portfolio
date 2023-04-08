<?php

$server   = 'localhost';
$username = 'root';
$password = '';
$database = 'Portafolio';

try {
    $conn = new mysqli($server, $username, $password, $database);
    $conn -> set_charset("utf16_spanish_ci");
} catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
}

?>