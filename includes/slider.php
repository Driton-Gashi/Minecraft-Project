<?php
function get_slider($first = null, $second = null, $third = null, $fourth = null, $fifth = null, $sixth = null)

{
?>
<div class="slideshow">
    <div class="moving">
        <div class="slide-box">
            <img src="../assets/img/slider/<?= $first['img'] ?>" alt="">
            <h1 class="slide-box-text"><?= $first['txt'] ?></h1>
        </div>
        <div class="slide-box">
            <img src="../assets/img/slider/<?= $second['img'] ?>" alt="">
            <h1 class="slide-box-text"><?= $second['txt'] ?></h1>
        </div>
        <div class="slide-box">
            <img src="../assets/img/slider/<?= $third['img'] ?>" alt="">
            <h1 class="slide-box-text"><?= $third['txt'] ?></h1>
        </div>
        <div class="slide-box">
            <img src="../assets/img/slider/<?= $fourth['img'] ?>" alt="">
            <h1 class="slide-box-text"><?= $fourth['txt'] ?></h1>
        </div>
        <div class="slide-box">
            <img src="../assets/img/slider/<?= $fifth['img'] ?>" alt="">
            <h1 class="slide-box-text"><?= $fifth['txt'] ?></h1>
        </div>
        <div class="slide-box">
            <img src="../assets/img/slider/<?= $sixth['img'] ?>" alt="">
            <h1 class="slide-box-text"><?= $sixth['txt'] ?></h1>
        </div>
    </div>
    <div class="slider-command">
        <button onclick="forward()" class="slider-btn"><i class="bi bi-forward-fill"></i></button>

        <button onclick="back()" class="slider-btn"><i class="bi bi-forward-fill"></i></button>
    </div>
</div>
<?php
}
?>

<!-- <div class="slideshow">
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
    </div> -->