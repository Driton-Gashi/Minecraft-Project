<?php
session_start();
if (isset($_SESSION['username'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="../assets/img/icons/favicon.ico" type="image/x-icon" />
        <title>404 - Page not found</title>
        <link rel="stylesheet" href="../css/404.css">
    </head>

    <body>
        <main>
            <div class="content">
                <h1 class="main-text">Oops!</h1>
                <h2 class="second-text">404 - PAGE NOT FOUND</h2>
                <p>E paske hupe rrugen ne oborr!</p>
                <button onclick="goToHomepage()" class="button">Go to Homepage</button>
            </div>
        </main>
    </body>
    <script>
        const goToHomepage = (e) => {
            setTimeout(() => {
                window.location = "../pages/Home.php";
            }, 200)
        }
    </script>

    </html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>