<?php
session_start();
$_SESSION['previous_location'] = 'single';
$id = $_GET['id'];
if (isset($_SESSION['username'])) {
    require '../php/db_conn.php';
    $query = $pdo->prepare('SELECT * FROM posts where id = :id');
    $query->bindParam(':id', $id);
    $query->execute();
    $posts = $query->fetchAll();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="../assets/img/icons/favicon.ico" type="image/x-icon" />
        <title><?= $posts['0']['title'] ?></title>
        <link rel="stylesheet" href="../css/index.css" />
        <link rel="stylesheet" href="../css/Blog.css" />
        <style>
            .post {
                width: 80%;
                min-height: 70vh;
            }

            .right form {
                height: 100%;
            }

            .post-content {
                height: 90%;
                overflow: auto;
            }
        </style>
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
                        foreach ($posts as $post) { ?>
                            <div class="post">
                                <div class="left"><img src="../php/uploads/posts/<?php echo $post['image'] ?>" alt="">
                                </div>
                                <div class="right">

                                    <form action="../php/edit.php" method="post">
                                        <input disabled type="text" class="post-title" name="title" value="<?= $post['title'] ?>">
                                        <textarea disabled class="post-content" name="content"><?php echo $post['content']; ?></textarea>
                                        <!-- <button class="read-more">Read more</button> -->
                                        <div class="post-footer">
                                            <div class="post-footer__author">
                                                <span class="j"> By: <a href="./Author.php?author=<?= $post['author'] ?>"><?= $post['author'] ?></a></span>
                                                <span class="k"> &ThickSpace; &ThickSpace;Date: <a href="#"><?= $post['date'] ?></a></span>
                                            </div>
                                            <?php
                                            if ($_SESSION['role'] == 'admin') {
                                            ?>
                                                <div class="footer-button green editForm">Edit</div>
                                            <?php
                                            } else {
                                            }
                                            ?>
                                            <div class="footer-button red hide cancel">Cancel</div>
                                            <?php if ($_SESSION['role'] == 'admin') { ?>
                                                <div onclick="deletePost(<?= $post['id'] ?>)" class="footer-button red delete">
                                                    Delete</div>
                                            <?php } ?>
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
            </div>
        </div>

        <?php include '../includes/footer.php' ?>
    </body>
    <script src="../js/header.js"></script>
    <script src="../js/blog.js"></script>

    </html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>