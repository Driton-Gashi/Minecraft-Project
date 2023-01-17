<?php
session_start();

if (isset($_SESSION['id'])) {
    header("Location: /");
}

require 'db_conn.php';

if (isset($_POST['usernameRegister'])) {
    $name = $_POST['usernameRegister'];
    $password = password_hash($_POST['passwordRegister'], PASSWORD_BCRYPT);
    $message = '';

    $sql = 'INSERT INTO users (user_name, password) VALUES (:name, :password)';
    $query = $pdo->prepare($sql);
    $query->bindParam('name', $name);
    $query->bindParam('password', $password);

    if ($query->execute()) {
        $message = "Successfully created your account";
    } else {
        $message = "A problem occurred creating your account";
    }
    header("Location: ../pages/Home.php");
}