<?php
session_start();
$_SESSION['previous_location'] = 'Foods';

if (isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../assets/img/icons/favicon.ico" type="image/x-icon" />
    <title>Minecraft Project - Foods</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/sub-pages.css" />
</head>
<!-- Loading Effect -->

<body class="noScroll">
    <?php include '../includes/loadingAndMusic.php' ?>
    <div class="background">
        <?php include '../includes/header.php' ?>
        <div class="hero">
            <!-- qeto posht ki me hek -->
            <div class="slideshow">
                <!--
                include '../includes/slider.php';
                // qetu punon Shota
                get_slider(array('img' => 'hoe.jpg', 'txt' => "Y’all Know What They Call These"), array('img' => 'enderman.jpg', 'txt' => 'Don’t Look Now, It’s An Enderman!'), array('img' => 'creeper.jpg', 'txt' => 'Don’t Fear The Creeper'), array('img' => 'died.png', 'txt' => 'YOO F*** The Creeper'), array('img' => 'flexing.jpg', 'txt' => 'I’m Rich'), array('img' => 'lava.jpg', 'txt' => 'It’s Getting Hot In Here'));
  -->
                <div class="moving">
                    <div class="slide-box">
                        <img src="../assets/img/slider/img-1.jpg" alt="" />
                        <h1 class="slide-box-text">Lorem ipsum dolor sit amet.</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/img-2.jpg" alt="" />
                        <h1 class="slide-box-text">Lorem ipsum dolor sit amet.</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/cow.png" alt="" />
                        <h1 class="slide-box-text">
                            Vegetarian's Will Be Mad About This
                        </h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/sheep.png" alt="" />
                        <h1 class="slide-box-text">These Getting Killed Too</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/img-1.jpg" alt="" />
                        <h1 class="slide-box-text">Lorem ipsum dolor sit amet.</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/img-2.jpg" alt="" />
                        <h1 class="slide-box-text">Lorem ipsum dolor sit amet.</h1>
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
            'title' => 'Foods',
            'first' => 'Raw',
            'second' => 'Cooked',
            'third' => 'Apple',
            'type' => 'foods'
        ));

        include '../includes/footer.php'
        ?>

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