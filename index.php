<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    header("Location: ./pages/Home.php");
    exit();
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./assets/img/icons/favicon.ico" type="image/x-icon" />
    <title>Login</title>
    <link rel="stylesheet" href="./css/index.css" />
</head>
<!-- Loading Effect -->

<body class="noScroll">
    <!-- Loading Effect -->
    <div class="loader-wrapper">
        <img src="./assets/img/icons/Minecraft-block.png" alt="" class="loader">
        <img src="./assets/img/icons/Minecraft-Logo.png" width="300px" alt="">
    </div>
    <script>
    window.addEventListener("load", () => {
        document.querySelector(".loader-wrapper").classList.add("hide");
        document.body.classList.remove("noScroll");
    })
    </script>
    <img src="./assets/img/site-under-construction.jpg" alt="" class="under-construction">
    <section id="sign-up">

        <section class="sign-up-wrapper">
            <div class="sign-up-form">
                <form action="./php/login.php" method="post" class="login">
                    <img src="./assets/img/icons/Minecraft-Logo.png" alt="" />
                    <div class="center">

                        <h1 class="username-label">Username</h1>
                        <input name="usernameLogin" class="username" type="text" />

                        <h1 class="password-label">Password</h1>
                        <input name="passwordLogin" type="password" class="password" />
                        <h1
                            class="validation-message l <?php if (isset($_SESSION['class'])) echo $_SESSION['class'] ?>">
                            <?php
                                if (isset($_SESSION['message'])) {
                                    echo $_SESSION['message'];
                                }
                                ?>
                        </h1>

                        <button type="submit">Login</button>

                        <h1 class="register-message">
                            <span class="haveAccount">Don't have an account</span>
                            <span class="register-message-btn l">register</span>
                        </h1>
                    </div>
                </form>
                <!-- Register Form -->
                <form action="./php/register.php" method="post" class="hide register">
                    <img src="./assets/img/icons/Minecraft-Logo.png" alt="" />
                    <div class="center">

                        <h1 class="username-label">Username</h1>
                        <input name="usernameRegister" class="username" type="text" />

                        <h1 class="password-label">Password</h1>
                        <input name="passwordRegister" type="password" class="password" />

                        <h1 class="confirm-password-label">Confirm password</h1>
                        <input name="confirmPassword" type="password" class="confirm-password" />


                        <h1 class="validation-message r">
                            <?php
                                if (isset($_SESSION['message'])) {
                                    echo $_SESSION['message'];
                                } ?>
                        </h1>

                        <button type="submit">Register</button>

                        <h1 class="register-message">
                            <span class="haveAccount">have an account</span>
                            <span class="register-message-btn r">Login</span>
                        </h1>
                    </div>
                </form>
            </div>
            <div class="sign-up-img">
                <img class="ghast" src="./assets/img/icons/ghast.gif" alt="" />
                <img class="sign-up-image" src="./assets/img/mobs/Enderman.webp" alt="">
            </div>
        </section>
    </section>
</body>
<script src="./js/sign-up.js"></script>

</html>
<?php
}
?>