<?php
session_start();
$id = $_GET['id'];
if (!isset($_SESSION['id'])) {
    header("Location: /");
}

require './db_conn.php';




$sql = 'DELETE FROM `posts` WHERE id = :id';
$query = $pdo->prepare($sql);
$query->bindParam('id', $id);

if ($query->execute()) {
    header("Location: ../pages/Blog.php?msg=Post was deleted succesfully");
    $_SESSION['deletedSuccesfully'] = true;
} else {
    header("Location: ../pages/Blog.php?msg=Post was unable to be deleted");
}