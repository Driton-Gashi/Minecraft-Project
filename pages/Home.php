<?php
session_start();
$_SESSION['previous_location'] = 'Home';

if (isset($_SESSION['username'])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="../assets/img/icons/favicon.ico" type="image/x-icon">
        <title>Minecraft Project - Homepage</title>
        <link rel="stylesheet" href="../css/homepage.css" />
        <link rel="stylesheet" href="../css/index.css" />
    </head>

    <body class="noScroll">
        <?php include '../includes/loadingAndMusic.php' ?>
        <div class="background">
            <?php include '../includes/header.php' ?>
            <div class="hero">
                <?php
                include '../includes/slider.php';
                // qetu punon Shota
                get_slider(array('img' => 'hoe.jpg', 'txt' => "Y’all Know What They Call These"), array('img' => 'enderman.jpg', 'txt' => 'Don’t Look Now, It’s An Enderman!'), array('img' => 'creeper.jpg', 'txt' => 'Don’t Fear The Creeper'), array('img' => 'died.png', 'txt' => 'YOO F*** The Creeper'), array('img' => 'flexing.jpg', 'txt' => 'I’m Rich'), array('img' => 'lava.jpg', 'txt' => 'It’s Getting Hot In Here'));
                ?>
            </div>
        </div>
        <section class="about" id="about">
            <div class="about-minecraft">
                <h1 class="title">About Minecraft</h1>
                <p class="description">
                    Minecraft is a super fun single/multiplayer game that can either be played on the pc or mobile version.
                    It has the java and the bedrock edition and also a wide variety of mods thad require only an
                    installation.
                    Minecraft is compatible with windows, ios and also linux and also can be downloaded via the authentic
                    page
                    of minecraft or via piracy (either way enjoy the game)
                <div>
                    <div class="btn">Learn More <img width="20px" src="../assets/img/icons/Minecraft_Block.svg" alt="">
                    </div>

                </div>
                </p>
            </div>
            <div class="video">
                <iframe width="800" height="400" src="https://www.youtube.com/embed/MmB9b5njVbA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>
        <section class="contact" id="contact">

            <div class="form-wrapper">
                <form action="../php/sendEmail.php" method="GET">
                    <h1 class="contact-us">Contact Us</h1>

                    <div class="center">
                        <h1 class="username-label">Name</h1>
                        <input class="contact-username" type="text" name="name" required placeholder="Your Name" id="name">

                        <h1 class="email-label">Email</h1>
                        <input class="email" type="email" name="email" required placeholder="Email Address" id="email">

                        <h1 class="message-label">Message</h1>
                        <textarea style="resize: none;" maxlength="240" class="message" placeholder="Your Message" class="form-control" name="message" rows="6" required id="text-area"></textarea>
                        <?php
                        if (isset($_SESSION['EmailMessage'])) {
                        ?>
                            <h3 style="padding-bottom: 0.5em;font-weight: lighter;color:<?= $_SESSION['color'] ?> ;">
                                <?= $_SESSION['EmailMessage'] ?>
                            </h3>
                        <?php }
                        ?>
                        <button class="contact-btn" type="submit" id="btn">Send</button>
                    </div>
                </form>
            </div>
        </section>
        <?php include '../includes/footer.php' ?>
    </body>
    <script src="../js/header.js"></script>
    <script src="../js/slider.js"></script>
    <script src="../js/index.js"></script>

    </html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>