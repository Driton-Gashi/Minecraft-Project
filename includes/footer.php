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
                <h3 class="footer-quickLink">Quick Links</h3>
                <ul>
                    <li><a href="#top">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3 class="footer-contact">Contact</h3>
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
<?php
if ($_SESSION['previous_location'] !== 'dashboard') {
?>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/63e0b1f0c2f1ac1e2031a011/1goirgkrr';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
<?php } ?>