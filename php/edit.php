<?php
session_start();
$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
if (!isset($_SESSION['id'])) {
    header("Location: /");
}

require './db_conn.php';

$sql = "UPDATE posts SET title=:title,content=:content WHERE id = :id";
$query = $pdo->prepare($sql);
$query->bindParam(':id', $id);
$query->bindParam(':title', $title);
$query->bindParam(':content', $content);

if ($query->execute()) {
    $_SESSION['deletedSuccesfully'] = true;

    header("Location: ../pages/Blog.php?msg=Post was updated succesfully");
} else {
    header("Location: ../pages/Blog.php?msg=Post was unable to be updated");
}