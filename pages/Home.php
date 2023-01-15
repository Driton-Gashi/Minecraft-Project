<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && isset($_SESSION['image'])) {
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
    <link rel="stylesheet" href="../css/slider.css" />
</head>

<!-- Loading Effect -->

<body class="noScroll">
    <div class="loader-wrapper">
        <img src="../assets/img/icons/Minecraft-block.png" alt="" class="loader">
        <img src="../assets/img/icons/Minecraft-Logo.png" width="300px" alt="">
    </div>
    <script>
    window.addEventListener("load", () => {
        document.querySelector(".loader-wrapper").classList.add("hide");
        document.body.classList.remove("noScroll");
    })
    </script>
    <img src="../assets/img/site-under-construction.jpg" alt="" class="under-construction">
    <!--Shto autoplay tek audio per mu dhez muzika vet  -->
    <audio loop class="minecraft-audio">
        <source src="../assets/audio/Minecraft-Theme-Song.mp3" type="audio/mp3">
    </audio>

    <div class="background">
        <header>
            <div class="logo">
                <a href="../index.php">
                    <img width="130px" src="../assets/img/icons/Minecraft-Logo.png" alt="" />
                </a>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="#top">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li class="dropdown-parent"><a href="#">Guide <i class="bi bi-chevron-down dropdown-icon"></i></a>
                        <ul class="dropdown hide">
                            <li onclick="(()=>{
                window.location = '../pages/Mobs.php'
              })()">Mobs</li>
                            <li onclick="(()=>{
                window.location = '../pages/Blocks.php'
              })()">Blocks</li>
                            <li onclick="(()=>{
                window.location = '../pages/Foods.php'
              })()">Foods</li>
                            <li onclick="(()=>{
                window.location = '../pages/Tools.php'
              })()">Tools</li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="header-icons">
                <i class="bi bi-volume-up-fill unMute "></i>

                <i class="bi bi-volume-mute-fill mute hide"></i>

                <!-- <div class="btn">Sign Up</div> -->
                <!-- add Hide to make profile option hidden -->
                <div class="profile ">
                    <img src="<?php echo  $_SESSION['image'] ?>" alt="">
                    <ul class="profile-menu hide">
                        <li onclick="changeName()" class="edit-profile-li"><i class="bi bi-person-circle"></i>
                            <div class="edit-profile-text-wrapper"> Edit Username &ThinSpace; </div><input
                                title="Press Enter to save changes" disabled class="name" type="text"
                                value="<?php echo $_SESSION['user_name'] ?>">
                        </li>
                        <li class="status-wrapper"><i class="bi bi-chat-dots"></i>
                            <select title="Change your status" onchange="statusChange()" class="status" name="" id="">

                                <option value="active">Active <span class="dot green"></span></option>
                                <option value="busy">Busy </option>
                                <option value="invisible">Invisible</option>
                            </select>
                        </li>
                        <li><i class="bi bi-gear-fill"></i> Settings</li>
                        <li onclick="logOut()"><i class="bi bi-box-arrow-left"></i> Log Out</li>
                    </ul>
                </div>
            </div>
        </header>
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
                        value="https://dritoni-shota.netlify.app/pages/thank-you.php#contact">
                    <button class="contact-btn" type="submit" id="btn">Send</button>
                </div>
            </form>
        </div>
    </section>

    <div class="before-footer">
        <img src="../assets/img/blocks/dirt.png" alt="">
        <img src="../assets/img/blocks/emerald.png" alt="">
        <img src="../assets/img/blocks/lapis.png" alt="">
        <img src="../assets/img/blocks/obsidian.png" alt="">
        <img src="../assets/img/blocks/diamond.png" alt="">
        <img src="../assets/img/blocks/bricks.png" alt="">
        <img src="../assets/img/blocks/cobblestone.png" alt="">
        <img src="../assets/img/blocks/glass.png" alt="">
        <img src="../assets/img/blocks/mossy.png" alt="">
    </div>
    <footer>
        <div class="footer-blur">
            <div class="footer-top">
                <div class="footer-section">
                    <h3>About Us</h3>
                    <p>Explore infinite worlds and build everything from the simplest of homes to the grandest of
                        castles. Play in creative mode with unlimited resources or mine deep into the world in survival
                        mode, crafting weapons and armor to fend off dangerous mobs. Create, explore and survive alone
                        or with friends</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#top">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>123 Lorem ipsum.</p>
                    <p>Peje, 30000</p>
                    <p>04* *** ***</p>
                    <p><a href="mailto:dritongashi1995@gmail.com">dritongashi1995@gmail.com</a></p>
                    <p><a href="mailto:ermalmusaj0@gmail.com">ermalmusaj0@gmail.com</a></p>
                </div>
                <div class="footer-section">
                    <img src="../assets/img/icons/Minecraft-Logo.png" alt="">

                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright">copyright Minecraft &copy; 2023 || Created by Driton Gashi && Ermal Musaj (Shota)
                </div>
            </div>
        </div>
    </footer>


</body>
<script src="../js/header.js"></script>
<script src="../js/slider.js"></script>
<script src="../js/sign-up.js"></script>
<script src="../js/index.js"></script>

</html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>