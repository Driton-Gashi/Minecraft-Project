<?php
session_start();
$_SESSION['class'] = 'randomClass';

$_SESSION['RegisterStatus'] = "";
$_SESSION['LoginStatus'] = "hide";

if (!isset($_POST['usernameRegister']) || !isset($_POST['passwordRegister']) || !isset($_POST['confirmPassword'])) {
    header("Location: ../index.php");
}

require './db_conn.php';
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// Me rregullu qe mos me mujt me regjistru usera qe egzistojn
if (isset($_POST['usernameRegister'])) {
    $username = $_POST['usernameRegister'];

    $query = $pdo->prepare("SELECT COUNT(*) AS numberOfUsers FROM `users` WHERE user_name = :username");
    $query->bindParam(':username', $username);

    $query->execute();
    $count = $query->fetch();

    if ($count['numberOfUsers'] > 0) {
        $_SESSION['message'] = 'A user exist with the same username!';
        header("Location: ../");
        die();
    } else {
    }
}
if (empty($_POST['usernameRegister']) || strlen($_POST['usernameRegister']) < 6 || strlen($_POST['usernameRegister']) > 22) {
    header("Location: ../");
    $_SESSION['message'] = 'Username should be at least 6 characters and max 22 characters';
} else if (empty($_POST['passwordRegister']) || strlen($_POST['passwordRegister']) < 6 || strlen($_POST['passwordRegister']) > 22) {
    header("Location: ../");
    $_SESSION['message'] = 'Password should be at least 6 characters and max 22 characters';
} else if (empty($_POST['confirmPassword']) || strcmp($_POST['passwordRegister'], $_POST['confirmPassword']) !== 0) {
    header("Location: ../");
    $_SESSION['message'] = 'Confirm Password is not the same as Password';
} else if (isset($_POST['usernameRegister']) && isset($_FILES['image']) && isset($_POST['passwordRegister']) && isset($_POST['confirmPassword'])) {
    $name = validate($_POST['usernameRegister']);
    $password = password_hash($_POST['passwordRegister'], PASSWORD_BCRYPT);
    $temp = $_FILES['image']['tmp_name'];
    $file_name = time() . $_FILES['image']['name'];
    move_uploaded_file($temp, dirname(__FILE__) . "\uploads\profiles\\$file_name");
    $sql = 'INSERT INTO users (user_name, password,image) VALUES (:name, :password, :image)';
    $query = $pdo->prepare($sql);
    $query->bindParam(':name', $name);
    $query->bindParam(':password', $password);
    $query->bindParam(':image', $file_name);

    if ($query->execute()) {
        $_SESSION['message'] = "Successfully created your account, you can login now!";
        $_SESSION['class'] = 'successful';
        header("Location: ../pages/Home.php");
    } else {
        "A problem occurred creating your account";
        header("Location: ../");
    }
} else {
    header("Location: ../");
    $_SESSION['message'] = "Something Went Wrong Try Again!";
}
