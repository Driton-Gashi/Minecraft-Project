<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../assets/img/icons/favicon.ico" type="image/x-icon" />
    <title>Minecraft Project - Tools</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/sub-pages.css" />
    <link rel="stylesheet" href="../css/slider.css" />
</head>
<!-- Loading Effect -->

<body class="noScroll">
    <?php include '../includes/loadingAndMusic.php' ?>
    <div class="background">
        <?php include '../includes/header.php' ?>
        <div class="hero">
            <div class="slideshow">
                <div class="moving">
                    <div class="slide-box">
                        <img src="../assets/img/slider/underwater.jpg" alt="" />
                        <h1 class="slide-box-text">Explore The Underwater Wolrd</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/aquamen.jpg" alt="" />
                        <h1 class="slide-box-text">Ku’ku’lkán</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/swords.jpg" alt="" />
                        <h1 class="slide-box-text">Diamond's Always The Best</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/bows.jpg" alt="" />
                        <h1 class="slide-box-text">Feeling Like Robin Hood</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/fortnite.jpg" alt="" />
                        <h1 class="slide-box-text">The Thing From Fortnite</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/img-2.jpg" alt="" />
                        <h1 class="slide-box-text">Surviving</h1>
                    </div>
                </div>
                <div class="slider-command">
                    <button onclick="forward()" class="slider-btn">
                        <i class="bi bi-forward-fill"></i>
                    </button>

                    <button onclick="back()" class="slider-btn">
                        <i class="bi bi-forward-fill"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php
        include '../includes/collection.php';
        get_collection(array(
            'title' => 'Tools',
            'first' => 'Diamond',
            'second' => 'Gold',
            'third' => 'Iron',
            'type' => 'tools'
        ));
        include '../includes/footer.php' ?>
</body>
<script src="../js/header.js"></script>
<script src="../js/slider.js"></script>
<script src="../js/collection.js"></script>

</html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>