<?php
session_start();
$_SESSION['previous_location'] = 'Blog';

if (isset($_SESSION['id'])) {
    require '../php/db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../assets/img/icons/favicon.ico" type="image/x-icon" />
    <title>News - Minecraft</title>
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
                        if ($_SESSION['role'] == 'admin') {
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
                    <?php
                        }
                        $query = $pdo->prepare('SELECT * FROM posts');
                        $query->execute();

                        $posts = $query->fetchAll();
                        foreach ($posts as $post) { ?>
                    <div class="post">
                        <div class="left"><img src="../php/uploads/<?php echo $post['image'] ?>" alt="">
                        </div>
                        <div class="right">

                            <form action="../php/edit.php" method="post">
                                <input disabled type="text" class="post-title" name="title"
                                    value="<?= $post['title'] ?>">
                                <textarea disabled class="post-content"
                                    name="content"><?php echo strlen($post['content']) > 550 ? substr($post['content'], 0, 547) . '...' : $post['content']; ?></textarea>
                                <!-- <button class="read-more">Read more</button> -->
                                <div class="post-footer">
                                    <div class="post-footer__author">
                                        By: <a href="#"><?= $post['author'] ?></a> &ThickSpace; &ThickSpace;Date: <a
                                            href="#"><?= $post['date'] ?></a>
                                    </div>
                                    <?php
                                            if ($_SESSION['role'] == 'admin') {
                                            ?>
                                    <div class="footer-button green editForm">Edit</div>
                                    <?php
                                            } else {
                                            ?>
                                    <a href="./single.php?id=<?= $post['id'] ?>"
                                        class="read-more footer-button green">Read more</a>
                                    <?php
                                            }
                                            ?>
                                    <div class="footer-button red hide cancel">Cancel</div>
                                    <a href="../php/delete.php?id=<?php echo $post['id'] ?>"
                                        class="footer-button red delete">Delete</a>
                                    <button type="submit" class="footer-button green hide confirm">Confirm</button>
                                    <input type="hidden" name="id" value="<?php echo $post['id'] ?>">
                                </div>
                            </form>

                        </div>
                    </div>

                    <?php
                        }
                        ?>
                </div>
            </div>
            <div class="right-side">
                <ul class="dashboard">
                    <li>
                        User: <?= $_SESSION['username'] ?>
                    </li>
                    <li>
                        Number of posts: <?= count($posts) ?>
                    </li>
                    <li>Role: <?= $_SESSION['role'] ?></li>

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