<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=minecraft_database", "root", "");
} catch (PDOException $pdo) {
    die("Unsuccessful connection");
}
