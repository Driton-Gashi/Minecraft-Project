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
    <link rel="icon" href="../assets/img/icons/favicon.ico" type="image/x-icon" />
    <title>404 - Page not found</title>
    <link rel="stylesheet" href="../css/404.css">
</head>
<!-- Loading Effect -->

<body>

</body>
<script src="../js/header.js"></script>
<script src="../js/slider.js"></script>
<script src="../js/blocks-data.js"></script>

</html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>