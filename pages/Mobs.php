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
            <!-- qeto posht e hek -->
            <?php include
                    '../includes/slider.php';
                // qetu punon Shota
                get_slider(array('img' => 'zombies.jpg', 'txt' => "Fighting Mobs."), array('img' => 'cave.jpg', 'txt' => 'Searching for Warden'), array('img' => 'update.jpg', 'txt' => 'Enjoy The New Updates'), array('img' => 'dragon.jpg', 'txt' => 'Fight To Survive'), array('img' => 'creative.jpg', 'txt' => 'Build Something Amazing'), array('img' => 'pigmen.jpg', 'txt' => 'Jesse Pigmen'));
                ?>
               
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