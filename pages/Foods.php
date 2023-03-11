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
        
            <?php include
                    '../includes/slider.php';
                // qetu punon Shota
                get_slider(array('img' => 'img-1.jpg', 'txt' => "Lorem ipsum dolor sit amet."), array('img' => 'img-2.jpg', 'txt' => 'Lorem ipsum dolor sit amet.'), array('img' => 'cow.png', 'txt' => 'Vegetarians Will Be Mad About This'), array('img' => 'sheep.png', 'txt' => 'These Getting Killed Too'), array('img' => 'img-1.jpg', 'txt' => 'Lorem ipsum dolor sit amet.'), array('img' => 'img-2.jpg', 'txt' => 'Lorem ipsum dolor sit amet.'));
                ?>
                
                
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