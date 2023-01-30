<?php
session_start();
$_SESSION['previous_location'] = 'Blocks';
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../assets/img/icons/favicon.ico" type="image/x-icon" />
    <title>Minecraft Project- Blocks</title>
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
                        <img src="../assets/img/slider/new blocks.jpg" alt="" />
                        <h1 class="slide-box-text">New Blocks</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/boom.jpg" alt="" />
                        <h1 class="slide-box-text">Booooooooom!</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/tools.jpg" alt="" />
                        <h1 class="slide-box-text">Gather Your Strength</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/friends.jpg" alt="" />
                        <h1 class="slide-box-text">Unite. Fight. Survive</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/lapiz.png" alt="" />
                        <h1 class="slide-box-text">I Thought I Found Diamonds</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/building.jpg" alt="" />
                        <h1 class="slide-box-text">Bob The Builder</h1>
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
            'title' => 'Blocks',
            'first' => 'Diamond',
            'second' => 'Block',
            'third' => 'Stone',
            'type' => 'blocks'
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