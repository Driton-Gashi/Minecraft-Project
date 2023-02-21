<?php
session_start();
$_SESSION['RegisterStatus'] = "hide";
$_SESSION['LoginStatus'] = "";
if (isset($_SESSION['user_id'])) {
    header("Location: ../");
}

require './db_conn.php';
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (empty($_POST['usernameLogin']) || strlen($_POST['usernameLogin']) < 6 || strlen($_POST['usernameLogin']) > 22) {
    header("Location: ../index.php");
    $_SESSION['message'] = 'Username should be at least 6 characters and max 22 characters';
} else if (empty($_POST['passwordLogin']) || strlen($_POST['passwordLogin']) < 6 || strlen($_POST['passwordLogin']) > 22) {
    header("Location: ../index.php");
    $_SESSION['message'] = 'Password should be at least 6 characters and max 22 characters';
} else if (isset($_POST['usernameLogin']) && isset($_POST['passwordLogin'])) {
    $username = validate($_POST['usernameLogin']);
    $password = $_POST['passwordLogin'];
    $query = $pdo->prepare('SELECT * FROM users WHERE user_name = :username');
    $query->bindParam(':username', $username);
    $query->execute();

    $user = $query->fetch();

    if ($username == $user['user_name'] && password_verify($password, $user['password'])) {

        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['user_name'];
        $_SESSION['image'] = $user['image'];
        $_SESSION['role'] = $user['role'];

        header("Location: ../pages/Home.php");
    } else {
        $_SESSION['message'] = 'Your username or password is wrong!';
        header('Location: ../');
    }
}
