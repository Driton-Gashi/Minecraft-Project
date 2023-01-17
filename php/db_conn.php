<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");
} catch (PDOException $pdo) {
    die("Unsuccessful connection");
}