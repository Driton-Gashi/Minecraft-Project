<?php
session_start();
$id = $_GET['id'];
if (!isset($_SESSION['id'])) {
    header("Location: /");
}

require './db_conn.php';
$sql = 'DELETE FROM `messages` WHERE id = :id';
$query = $pdo->prepare($sql);
$query->bindParam('id', $id);
$query->execute();
