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