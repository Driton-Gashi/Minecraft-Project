<?php
session_start();
$id = $_GET['id'];
if (!isset($_SESSION['id'])) {
    header("Location: /");
}

require './db_conn.php';
$sql = 'DELETE FROM `users` WHERE id = :id';
$query = $pdo->prepare($sql);
$query->bindParam('id', $id);

if ($query->execute()) {
    header("Location: ../pages/Dashboard.php?msg=User was deleted succesfully");
    $_SESSION['deletedSuccesfully'] = true;
} else {
    header("Location: ../pages/Dashboard.php?msg=User was unable to be deleted");
}
