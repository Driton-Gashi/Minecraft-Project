<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    require '../php/db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../assets/img/icons/favicon.ico" type="image/x-icon" />
    <title>Blog</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/Blog.css" />
</head>
<!-- Loading Effect -->

<body class="noScroll">
    <?php include '../includes/loadingAndMusic.php' ?>
    <div class="background">
        <?php include '../includes/header.php' ?>

        <div v class="hero">

            <div class="left-side">
                <div class="content">
                    <?php
                        if ($_SESSION['username'] == 'driton' || $_SESSION['username'] == 'shota') {
                        ?>
                    <div class="post ">
                        <form action="../php/create-post.php" class="post-form" method="post"
                            enctype="multipart/form-data">

                            <h1 class="title-label">Title:</h1>
                            <input type="text" name="title" class="title-input" placeholder="Post title Here...">
                            <h1 class="content-label">Content:</h1>
                            <textarea name="content" class="content-input"
                                placeholder="Post content Here..."></textarea>
                            <h1 class="file-label">Upload Image:</h1>
                            <input type="file" name="image" class="file-input">
                            <button type="submit" class="post-button">Publish new post</button>
                        </form>
                    </div>
                    <?php
                        }
                        if (isset($_GET['msg']) && isset($_SESSION['deletedSuccesfully'])) { ?>
                    <div class="message-box <?php echo $_SESSION['deletedSuccesfully'] ? "green" : "red" ?>">
                        <?php echo $_GET['msg'] ?>
                        <i class="bi bi-x-circle close-message-box"></i>
                    </div>
                    <?php }

                        $query = $pdo->prepare('SELECT * FROM posts');
                        $query->execute();

                        $posts = $query->fetchAll();
                        foreach ($posts as $post) {
                        ?>
                    <div class="post">
                        <div class="left"><img src="../php/uploads/<?php echo $post['image'] ?>" alt=""></div>
                        <div class="right">
                            <div class="post-title"><?= $post['title'] ?></div>
                            <div class="post-content"><?= $post['content'] ?></div>
                            <div class="post-footer">
                                <div class="post-footer__author">
                                    By: <a href="#"><?= $post['author'] ?></a> &ThickSpace; &ThickSpace;Date: <a
                                        href="#"><?= $post['date'] ?></a>
                                </div>
                                <button class="read-more">Read more</button>
                                <a href="../php/delete.php?id=<?php echo $post['id'] ?>" class="delete">Delete</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                        ?>
                </div>
            </div>
            <div class="right-side">
                <h1 class="first-title">Main menu</h1>
                <ul class="dashboard">
                    <li>
                        <h3> User: <?= $_SESSION['username'] ?></h3>
                    </li>
                    <li>
                        <h3>Total number of posts: <?= count($posts) ?></h3>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <?php include '../includes/footer.php' ?>
</body>
<script src="../js/blog.js"></script>
<script src="../js/header.js"></script>

</html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>