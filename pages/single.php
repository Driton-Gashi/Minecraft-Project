<?php
session_start();
$_SESSION['previous_location'] = 'single';

if (isset($_SESSION['id'])) {
    require '../php/db_conn.php';
    $id = $_GET['id'];
    $sql = 'SELECT * FROM `posts` WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->bindParam('id', $id);
    $query->execute();
    $post = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../assets/img/icons/favicon.ico" type="image/x-icon" />
    <title><?php echo $post['0']['title'] ?> - Minecraft</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/single.css" />

</head>
<!-- Loading Effect -->

<body class="noScroll">
    <?php include '../includes/loadingAndMusic.php' ?>
    <div class="background">
        <?php include '../includes/header.php' ?>
        <div class="hero">

        </div>
    </div>
    </div>
    <?php include '../includes/footer.php' ?>
</body>
<script src="../js/header.js"></script>
<script src="../js/blog.js"></script>

</html>
<?php
} else {
    header("Location: /");
    exit();
}
?>