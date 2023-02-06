<?php
session_start();
$_SESSION['previous_location'] = 'Mobs';

if (isset($_SESSION['username'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="../assets/img/icons/favicon.ico" type="image/x-icon" />
        <title>Minecraft Project - Mobs</title>
        <link rel="stylesheet" href="../css/index.css" />
        <link rel="stylesheet" href="../css/sub-pages.css" />
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
                            <img src="../assets/img/slider/zombies.jpg" alt="" />
                            <h1 class="slide-box-text">Fighting Mobs.</h1>
                        </div>
                        <div class="slide-box">
                            <img src="../assets/img/slider/cave.jpg" alt="" />
                            <h1 class="slide-box-text">Searching for Warden</h1>
                        </div>
                        <div class="slide-box">
                            <img src="../assets/img/slider/update.jpg" alt="" />
                            <h1 class="slide-box-text">Enjoy The New Updates</h1>
                        </div>
                        <div class="slide-box">
                            <img src="../assets/img/slider/dragon.jpg" alt="" />
                            <h1 class="slide-box-text">Fight To Survive</h1>
                        </div>
                        <div class="slide-box">
                            <img src="../assets/img/slider/creative.jpg" alt="" />
                            <h1 class="slide-box-text">Build Something Amazing</h1>
                        </div>
                        <div class="slide-box">
                            <img src="../assets/img/slider/pigmen.jpg" alt="" />
                            <h1 class="slide-box-text">Jesse Pigmen</h1>
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
            'title' => 'Mobs',
            'first' => 'Zombie',
            'second' => 'Skeleton',
            'third' => 'Warden',
            'type' => 'mobs'
        ));

        include '../includes/footer.php'
        ?>
    </body>
    <script src="../js/slider.js"></script>
    <script src="../js/collection.js"></script>
    <script src="../js/header.js"></script>


    </html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>