<?php
session_start();
if ($_SESSION['previous_location'] !== 'dashboard') {
    unset($_SESSION['updatingMessage']);
}
if (!isset($_POST['newUsername']) || !isset($_POST['newPassword']) || !isset($_POST['newRole'])) {
    header("Location: ../pages/Dashboard.php");
}

require './db_conn.php';
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//  kodi qe e bllokon Mos me mujt me regjistru usera qe egzistojn
if (isset($_POST['newUsername'])) {
    $username = $_POST['newUsername'];

    $query = $pdo->prepare("SELECT COUNT(*) AS numberOfUsers FROM `users` WHERE user_name = :username");
    $query->bindParam(':username', $username);

    $query->execute();
    $count = $query->fetch();

    if ($count['numberOfUsers'] > 1) {
        $_SESSION['updatingMessage'] = 'A user exist with the same username!';
        header("Location: ../pages/Dashboard.php");
        die();
    } else {
    }
}
$_SESSION['updatingSuccessful'] = false;
if (empty($username) || strlen($username) < 6 || strlen($username) > 22) {
    header("Location: ../pages/Dashboard.php");
    $_SESSION['updatingMessage'] = 'Username should be at least 6 characters and max 22 characters = ' . $_SESSION['newUsername'];
} else if (empty($_POST['newPassword']) || strlen($_POST['newPassword']) < 6) {
    header("Location: ../pages/Dashboard.php");
    $_SESSION['updatingMessage'] = 'Password should be at least 6 characters and max 22 characters';
} else if (empty($_POST['newRole'])) {
    header("Location: ../pages/Dashboard.php");
    $_SESSION['updatingMessage'] = 'You forgot to fill the new role!';
} else if (isset($_POST['newUsername']) && isset($_POST['newPassword']) && isset($_POST['newRole'])) {
    $name = validate($_POST['newUsername']);
    $id = $_POST['id'];
    $password = password_hash($_POST['newPassword'], PASSWORD_BCRYPT);
    $role = validate($_POST['newRole']);
    $sql = 'UPDATE users SET user_name=:name,password=:password,role=:role WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->bindParam(':name', $name);
    $query->bindParam(':password', $password);
    $query->bindParam(':role', $role);
    $query->bindParam(':id', $id);

    if ($query->execute()) {
        $_SESSION['message'] = null;
        $_SESSION['updatingMessage'] = 'User was updated successfully!';
        $_SESSION['updateSuccessful'] = true;
        header("Location: ../pages/Dashboard.php");
    } else {
        $_SESSION['updatingMessage'] = "Oops Something Went Wrong!";
        header("Location: ../pages/Dashboard.php");
        $_SESSION['updateSuccessful'] = false;
    }
} else {
    header("Location: ../pages/Dashboard.php");

    $_SESSION['updatingMessage'] = "Something Went Wrong Try Again!";
}
