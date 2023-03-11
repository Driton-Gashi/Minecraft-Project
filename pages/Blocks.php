<?php
session_start();
$_SESSION['previous_location'] = 'Blocks';
if (isset($_SESSION['username'])) {
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
                get_slider(array('img' => 'new blocks.jpg', 'txt' => "New Blocks"), array('img' => 'boom.jpg', 'txt' => 'Booooooom!'), array('img' => 'tools.jpg', 'txt' => 'Gather Your Strength'), array('img' => 'friends.jpg', 'txt' => 'Unite. Fight. Survive'), array('img' => 'lapiz.png', 'txt' => 'I Thought I Found Diamonds'), array('img' => 'building.jpg', 'txt' => 'Bob The Builder'));
                ?>
               
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