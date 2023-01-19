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
    <title>Minecraft Project - Foods</title>
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
    <div id="collection" class="collection">
        <h1 class="collection-title flex-center">
            Foods Collection &MediumSpace;
            <img width="50px" src="../assets/img/icons/block.gif" alt="" />
        </h1>
        <div class="collection-content">
            <div class="collection-header">
                <div class="collection-buttons-wrapper">
                    <button onclick="filterBox('cooked')" class="collection-btn">Cooked Meat</button>
                    <button onclick="filterBox('raw')" class="collection-btn">Raw Meat</button>
                    <button onclick="filterBox('potato')" class="collection-btn">Potato</button>
                    <button onclick="filterBox('')" class="collection-btn">reset</button>
                </div>
                <div class="collection-search-wrapper">
                    <input type="text" class="collection-search-input" placeholder="Search Food" />
                    <button class="collection-search-btn">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
            <div class="collection-body">

            </div>
        </div>
    </div>
    <?php include '../includes/header.php' ?>
</body>
<script src="../js/header.js"></script>
<script src="../js/slider.js"></script>
<script src="../js/foods-data.js"></script>

</html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>