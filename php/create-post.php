<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: /");
}

require './db_conn.php';

if (isset($_POST['title']) && isset($_POST['content']) && isset($_FILES['image'])) {

    $temp = $_FILES['image']['tmp_name'];
    $file_name = time() . $_FILES['image']['name'];
    move_uploaded_file($temp, dirname(__FILE__) . "\uploads\posts\\$file_name");
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_SESSION['username'];
    $sql = 'INSERT INTO posts (title, content,author,image,authorID) VALUES (:title, :content,:author,:image, :id)';
    $query = $pdo->prepare($sql);
    $query->bindParam(':title', $title);
    $query->bindParam(':content', $content);
    $query->bindParam(':author', $author);
    $query->bindParam(':image', $file_name);
    $query->bindParam(':id', $_POST['authorID']);
    $query->execute();
    header("Location: ../pages/Blog.php");
}
