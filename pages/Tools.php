<?php
session_start();
$_SESSION['previous_location'] = 'Tools';

if (isset($_SESSION['username'])) {
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
                get_slider(array('img' => 'underwater.jpg', 'txt' => "Explore The Underwater Wolrd"), array('img' => 'aquamen.jpg', 'txt' => 'Ku’ku’lkán'), array('img' => 'swords.jpg', 'txt' => "Diamond's Always The Best"), array('img' => 'bows.jpg', 'txt' => 'Feeling Like Robin Hood'), array('img' => 'fortnite.jpg', 'txt' => 'The Thing From Fortnite'), array('img' => 'img-2.jpg', 'txt' => 'Surviving'));
                ?>
                    
                   
                
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