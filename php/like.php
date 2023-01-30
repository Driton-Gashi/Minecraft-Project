<?php
session_start();
$previousPage = $_SESSION['previous_location'];
$_SESSION['previous_location'] = "like";
$id = $_GET['id'];
$table_name = $_GET['table'] . "_data";
$pageName = $_GET['table'];
if (!isset($_SESSION['id'])) {
    header("Location: /");
}
require './db_conn.php';

$sql = "UPDATE $table_name SET likes= likes+1 WHERE id = :id";
$query = $pdo->prepare($sql);
$query->bindParam('id', $id);

if ($query->execute()) {
    header("Location: ../pages/$previousPage.php");
} else {
    header("Location: ../pages/$previousPage.php");
}