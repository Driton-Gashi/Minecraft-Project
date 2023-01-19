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


        <div class="profile ">
            <img src="<?php echo $_SESSION['image'] ?>" alt="">
            <ul class="profile-menu hide">
                <li onclick="changeName()" class="edit-profile-li"><i class="bi bi-person-circle"></i>
                    <div class="edit-profile-text-wrapper"> Edit Username &ThinSpace; </div><input
                        title="Press Enter to save changes" disabled class="name" type="text"
                        value="<?php echo $_SESSION['username'] ?>">
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