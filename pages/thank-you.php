<?php
session_start();
$_SESSION['previous_location'] = 'thank-you';

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
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

<!-- Loading Effect -->

<body>
    <?php include '../includes/loadingAndMusic.php' ?>

    <div class="background">
        <?php include '../includes/header.php' ?>
        <div class="hero">
            <div class="slideshow">
                <div class="moving">
                    <div class="slide-box">
                        <img src="../assets/img/slider/hoe.jpg" alt="">
                        <h1 class="slide-box-text">Y'all Know What They Call These</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/enderman.jpg" alt="">
                        <h1 class="slide-box-text">Don’t Look Now, It’s An Enderman!</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/creeper.jpg" alt="">
                        <h1 class="slide-box-text">Don’t Fear The Creeper</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/died.png" alt="">
                        <h1 class="slide-box-text">YOO F*** The Creeper</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/flexing.jpg" alt="">
                        <h1 class="slide-box-text">I'm Rich</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/lava.jpg" alt="">
                        <h1 class="slide-box-text">It's Getting Hot In Here</h1>
                    </div>
                </div>
                <div class="slider-command">
                    <button onclick="forward()" class="slider-btn"><i class="bi bi-forward-fill"></i></button>

                    <button onclick="back()" class="slider-btn"><i class="bi bi-forward-fill"></i></button>
                </div>
            </div>
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
            <iframe width="800" height="400" src="https://www.youtube.com/embed/MmB9b5njVbA"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </section>
    <section class="contact" id="contact">

        <div class="form-wrapper">
            <form action="https://formsubmit.co/dritongashi1995@gmail.com" method="POST">
                <h1 class="contact-us">Contact Us</h1>
                <h1 class="messageSent">Thank you for contacting us, Send us another message.</h1>

                <div class="center">
                    <!-- <h1 class="username-label">Username</h1>
              <input  class="username" type="text" > -->

                    <input type="hidden" name="_subject" value="Message From Your Website">

                    <h1 class="username-label">Name</h1>
                    <input class="contact-username" type="text" name="name" required placeholder="Your Name" id="name">

                    <h1 class="email-label">Email</h1>
                    <input class="email" type="email" name="email" required placeholder="Email Address" id="email">

                    <input type="hidden" name="_next" value="https://dritoni-shota.netlify.app/">

                    <h1 class="message-label">Message</h1>
                    <textarea style="resize: none;" maxlength="240" class="message" placeholder="Your Message"
                        class="form-control" name="message" rows="6" required id="text-area"></textarea>
                    <input type="hidden" name="_autoresponse"
                        value="Ne sapo morrem mesazhin tuaj dhe do ju pergjigjemi se shpejti">
                    <input type="hidden" name="_template" value="table">
                    <input type="hidden" name="_cc" value="ermalmusaj0@gmail.com">
                    <input type="hidden" name="_subject" value="Message from your Minecraft Website">
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_next"
                        value="http://dritoni-shota.great-site.net/pages/thank-you.php#contact">
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