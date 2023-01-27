<!-- function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']); -->
<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: ../");
}

require './db_conn.php';

if (isset($_POST['usernameLogin'])) {
    $username = $_POST['usernameLogin'];
    $password = $_POST['passwordLogin'];
    $query = $pdo->prepare('SELECT id,user_name,password, image,role FROM users WHERE user_name = :username');
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
?>