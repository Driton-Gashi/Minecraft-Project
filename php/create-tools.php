<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: /");
}

require './db_conn.php';

if (isset($_POST['tools_name']) && isset($_FILES['image'])) {
    $name = $_POST['tools_name'];
    $temp = $_FILES['image']['tmp_name'];
    $file_name = time() . $_FILES['image']['name'];
    move_uploaded_file($temp, dirname(__FILE__) . "\uploads\\$file_name");
    $sql = 'INSERT INTO tools_data (name, image) VALUES (:name,:image)';
    $query = $pdo->prepare($sql);
    $query->bindParam('name', $name);
    $query->bindParam('image', $file_name);
    $query->execute();
    header("Location: ../pages/Tools.php");
}