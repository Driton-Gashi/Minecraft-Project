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
    <title>Minecraft Project - Tools</title>
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
                        <img src="../assets/img/slider/underwater.jpg" alt="" />
                        <h1 class="slide-box-text">Explore The Underwater Wolrd</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/aquamen.jpg" alt="" />
                        <h1 class="slide-box-text">Ku’ku’lkán</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/swords.jpg" alt="" />
                        <h1 class="slide-box-text">Diamond's Always The Best</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/bows.jpg" alt="" />
                        <h1 class="slide-box-text">Feeling Like Robin Hood</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/fortnite.jpg" alt="" />
                        <h1 class="slide-box-text">The Thing From Fortnite</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/img-2.jpg" alt="" />
                        <h1 class="slide-box-text">Surviving</h1>
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
            Tools Collection &MediumSpace;
            <img width="50px" src="../assets/img/icons/block.gif" alt="" />
        </h1>
        <div class="collection-content">
            <div class="collection-header">
                <div class="collection-buttons-wrapper">
                    <button onclick="filterBox('diamond')" class="collection-btn">
                        Diamond
                    </button>
                    <button onclick="filterBox('gold')" class="collection-btn">
                        Gold
                    </button>
                    <button onclick="filterBox('fishing')" class="collection-btn">
                        others
                    </button>
                    <button onclick="filterBox('')" class="collection-btn">
                        Reset
                    </button>
                </div>
                <div class="collection-search-wrapper">
                    <input type="text" class="collection-search-input" placeholder="Search Tool" />
                    <button class="collection-search-btn">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
            <div class="collection-body">
                <!-- Collection-box start -->

                <!-- <div class="collection-box">
            <div class="collection-box-body">
              <img src="../assets/img/mobs/skeleton.png" alt="" />
              <h1 class="collection-box-title">Lorem ipsum dolor sit. </h1>
            </div>
            <div class="collection-box-footer">
              <span class="view-wrapper"
                ><i class="bi bi-eye-fill"></i>
                <span class="view-number">&ThinSpace;?</span>
              </span>

              <span class="like-wrapper"
                ><i class="bi bi-suit-heart"></i
                ><span class="like-number">&ThinSpace; ?</span>
              </span>
            </div>
          </div> -->

                <!--Collection-box end -->
            </div>
        </div>
    </div>
    <!-- Sign Up Section -->
    <section id="sign-up" class="">
        <div class="close">
            <img src="../assets/img/icons/minecraft-close-icon.svg" alt="" />
        </div>
        <section class="sign-up-wrapper">
            <div class="sign-up-form">
                <!-- qetu e qet Sign Up form -->
                <form>
                    <img src="../assets/img/icons/Minecraft-Logo.png" alt="" />
                    <div class="center">
                        <h1 class="username-label">Username</h1>
                        <input class="username" type="text" />

                        <h1 class="password-label">Password</h1>
                        <input type="password" class="password" />

                        <h1 class="confirm-password-label hide">Confirm password</h1>
                        <input type="password" class="confirm-password hide" />

                        <div class="keep-me-logged-in">
                            <input type="checkbox" />I'm not a robot
                        </div>
                        <div class="validation-message"></div>
                        <button type="button">Login</button>
                        <h1 class="register-message">
                            <span class="haveAccount">Don't have an account</span>
                            <span class="register-message-btn">register</span>
                        </h1>
                    </div>
                </form>
            </div>
            <div class="sign-up-img">
                <img class="ghast" src="../assets/img/icons/ghast.gif" alt="" />
                <img class="sign-up-image" src="../assets/img/mobs/Enderman.webp" alt="" />
            </div>
        </section>
    </section>
    <?php include '../includes/footer.php' ?>
</body>
<script src="../js/header.js"></script>
<script src="../js/slider.js"></script>
<script src="../js/tools-data.js"></script>

</html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>