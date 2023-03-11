<?php
session_start();
$_SESSION['previous_location'] = 'dashboard';
if (isset($_SESSION['role']) && $_SESSION['role']  == 'admin') {
    require '../php/db_conn.php';
    $query = $pdo->prepare('SELECT * FROM users');
    $query->execute();
    $users = $query->fetchAll();

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="../assets/img/icons/favicon.ico" type="image/x-icon" />
        <title><?= $_SESSION['username'] ?> - admin dashboard</title>
        <link rel="stylesheet" href="../css/dashboard.css">
        <link rel="stylesheet" href="../css/index.css">

    </head>
    <!-- Loading Effect -->

    <body class="noScroll">
        <?php include '../includes/loadingAndMusic.php' ?>
        <div class="background">
            <?php include '../includes/header.php' ?>
            <div class="messagesWrapper">
            </div>
            <div class="table-wrapper">
                <form action="../php/register.php" method="post" class="register hideLeft on-dashboard" enctype="multipart/form-data">
                    <img class="logo" src="../assets/img/icons/Minecraft-Logo.png" alt="" />
                    <div onclick="hideRegisterForm()" class="closeRegisterBtn"><i class="bi bi-x-lg"></i></div>
                    <div class="center">

                        <h3 class="username-label">Username</h3>
                        <input name="usernameRegister" class="username r" type="text" />

                        <h3 class="password-label">Password</h3>
                        <input name="passwordRegister" type="password" class="password r" />

                        <h3 class="confirm-password-label">Confirm password</h3>
                        <input name="confirmPassword" type="password" class="confirm-password" />
                        <h3 class="confirm-password-label">Upload Image (optional)</h3>
                        <input name="image" type="file" class="file r" />


                        <h1 class="validation-message r <?php if (isset($_SESSION['class'])) echo $_SESSION['class'] ?>">
                            <?php
                            if (isset($_SESSION['message'])) {
                                echo $_SESSION['message'];
                            } ?>
                        </h1>

                        <button class="r" type="submit">Add New User</button>
                    </div>
                </form>
                <div class="search-wrapper">
                    <input type="text" class="user-input" placeholder='Search Users by "Username"'>
                    <button onclick="filterUserTable()" class="search-btn">
                        <i class="bi bi-search"></i>
                    </button>
                    <button onclick="cancelSearch()" class=" hide search-cancel">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                <table>

                    <tr class="first-row">
                        <th>Avatar</th>
                        <th>Username</th>
                        <th>Password <span class="encrypted">(Encrypted)</span></th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    if (isset($_SESSION['updatingMessage'])) { ?>
                        <tr>
                            <th class="<?= $_SESSION['updateSuccessful'] ? "successful" : "" ?>" style="color: rgb(255, 0, 0); padding: 1.3em;background-color: #333;" colspan="5">
                                <?= $_SESSION['updatingMessage'] ?>
                            </th>
                        </tr>
                    <?php }
                    foreach ($users as $user) {
                    ?>
                        <tr class="row">
                            <form action="../php/editUser.php" method="POST">
                                <td class="user-image"><img src="../php/uploads/profiles/<?= $user['image'] ?>" alt="">
                                </td>
                                <td><input type="text" class="username" name="newUsername" disabled value="<?= $user['user_name'] ?>"></td>
                                <td><input type="text" class="password" name="newPassword" disabled value="<?= $user['password'] ?>"></td>
                                <td><input type="text" class="role" name="newRole" disabled value="<?= $user['role'] ?>"></td>
                                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                <td class="button-wrapper">
                                    <div class="edit green tableBtn">Edit</div>
                                    <button type="submit" class="confirm hide green tableBtn">Confirm</button>
                                    <div class="cancel hide red tableBtn">Cancel</div>
                                    <div onclick="deleteUser(<?= $user['id'] ?>)" class="delete red tableBtn">Delete</div>
                                </td>
                            </form>

                        </tr>
                    <?php } ?>
                    <tr class="row">
                        <th style="cursor:default;" colspan="5">
                            <div onclick="showRegisterForm()" class="addUserBtn 
                        ">Add New User</div>
                        </th>

                    </tr>

                </table>
            </div>
        </div>

        <?php include '../includes/footer.php' ?>
    </body>
    <script src="../js/header.js"></script>
    <script src="../js/dashboard.js"></script>

    </html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>