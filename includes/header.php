<?php
if ($_SESSION['role'] == 'admin') {
    require '../php/db_conn.php';
    $query = $pdo->prepare('SELECT * FROM messages');
    $query->execute();
    $messages = $query->fetchAll();

?>
    <div class="inbox-wrapper">
        <div onclick="hideInbox()" class="close-inbox closeRegisterBtn"><i class="bi bi-x-lg"></i></div>
        <div class="inbox-header">
            <h1 class="inbox-title">Inbox</h1>
        </div>
        <div class="inbox-body">
            <h1 class="hide inboxWarning">No messages to show</h1>
            <?php
            foreach ($messages as $message) { ?>
                <div class="inbox-message"> 
                    <div onclick="deleteInboxMessage(<?= $message['id'] ?>)" class="delete-message"><i class="bi bi-trash3-fill"></i>
                    </div>
                    <h3 class="inbox-message-title">Message ID: <?= $message['id'] ?></h3>
                    <p class="inbox-message-content"><?= $message['message'] ?></p>
                    <p class="inbox-message-author-details">By: <?= $message['author'] ?> | <a href="mailto:<?= $message['authorEmail'] ?>"><?= $message['authorEmail'] ?></a> |
                        date: <?= $message['date'] ?>

                    </p>

                </div>
            <?php } ?>
            <script>
                const numberOfMessages = document.querySelectorAll(".inbox-message").length;
                const inboxMsg = document.querySelector(".inboxWarning");

                if (numberOfMessages == 0) {
                    inboxMsg.classList.remove("hide");
                }
            </script>
        </div>
    </div>
<?php } ?>
<header>
    <div class="logo">
        <a href="../index.php">
            <img width="130px" src="../assets/img/icons/Minecraft-Logo.png" alt="" />
        </a>
    </div>
    <nav>
        <ul class="menu">
            <i onclick="hideMenu()" class="bi bi-x-square close"></i>
            <li><a href="./Home.php">Home</a></li>
            <li><a href="./Home.php#about">About</a></li>
            <li><a href="./Home.php#contact">Contact</a></li>
            <li class="dropdown-parent"><a>Guide <i class="bi bi-chevron-down dropdown-icon"></i></a>
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
            <li><a href="../pages/Blog.php">Blog</a></li>

        </ul>
    </nav>
    <div class="header-icons">
        <i onclick="showMenu()" class="bi bi-list burger"></i>
        <i class="bi bi-volume-up-fill unMute "></i>
        <i class="bi bi-volume-mute-fill mute hide"></i>
        <div class="profile ">
            <img src="../php/uploads/profiles/<?= $_SESSION['image'] ?>" alt="">
            <ul class="profile-menu hide">
                <li onclick="changeName()" class="edit-profile-li"><i class="bi bi-person-circle"></i>
                    <div class="edit-profile-text-wrapper"> Edit Username &ThinSpace; </div><input title="Press Enter to save changes" disabled class="name" type="text" value="<?php echo $_SESSION['username'] ?>">
                </li>
                <li class="status-wrapper"><i class="bi bi-chat-dots"></i>
                    <select title="Change your status" onchange="statusChange()" class="status" name="" id="">


                        <option value="active">Active <span class="dot green"></span></option>
                        <option value="busy">Busy </option>
                        <option value="invisible">Invisible</option>
                    </select>
                </li>
                <?php
                if ($_SESSION['role'] == 'admin') {
                ?>
                    <li onclick="(()=>{
                window.location = './Dashboard.php'
              })()">
                        <i class="bi bi-pencil-square"></i> Admin Dashboard
                    </li>
                    <li onclick="showInbox()"><i class="bi bi-inbox-fill"></i> Inbox</li>
                <?php } else { ?>
                    <li>
                        <i class="bi bi-gear-fill"></i> Settings
                    </li>
                <?php } ?>
                <li onclick="logOut()"><i class="bi bi-box-arrow-left"></i> Log Out</li>
            </ul>
        </div>
    </div>
</header>