<?php
if (isset($_SESSION['id'])) {
    function get_collection($args = null)
    {
        require '../php/db_conn.php';

?>
<div id="collection" class="collection">
    <h1 class="collection-title flex-center">
        <?php echo $args['title'] ?> Collection &MediumSpace;
        <img width="50px" src="../assets/img/icons/block.gif" alt="" />
    </h1>
    <div class="collection-content">
        <div class="collection-header">
            <div class="collection-buttons-wrapper">
                <button onclick="filterBox('<?= $args['first'] ?>')" class="collection-btn">
                    <?= $args['first'] ?>
                </button>
                <button onclick="filterBox('<?= $args['second'] ?>')" class="collection-btn">
                    <?= $args['second'] ?>
                </button>
                <button onclick="filterBox('<?= $args['third'] ?>')" class="collection-btn">
                    <?= $args['third'] ?>
                </button>
                <button onclick="filterBox('')" class="collection-btn">
                    Reset
                </button>
            </div>
            <div class="collection-search-wrapper">
                <input type="text" class="collection-search-input" placeholder="Search <?= $args['title'] ?>" />
                <button class="collection-search-btn">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
        <?php
                if ($_SESSION['role'] == 'admin') {
                ?>
        <div class="post ">
            <form action="../php/create-<?= $args['type'] ?>.php" class="post-form" method="post"
                enctype="multipart/form-data">

                <h1 class="name-label"><?= $args['type'] ?> name:</h1>
                <input type="text" name="<?= $args['type'] ?>_name" class="mob_name"
                    placeholder="<?= $args['type'] ?> name here...">
                <h1 class="file-label">Upload Image:</h1>
                <input type="file" name="image" class="file-input">
                <button type="submit" class="mob-button">Publish new <?= $args['type'] ?></button>
            </form>
        </div>
        <?php
                }
                $query = $pdo->prepare('SELECT * FROM ' . $args['type'] . '_data');
                $query->execute();

                $mobs = $query->fetchAll();
                foreach ($mobs as $mob) {
                ?>
        <div class="collection-body">
            <div class="collection-box">
                <div class="collection-box-body">
                    <img src="../php/uploads/<?= $mob['image'] ?>" alt="">
                    <h1 class="collection-box-title"><?= $mob['name'] ?></h1>
                </div>
                <div class="collection-box-footer">
                    <span class="view-wrapper"><i class="bi bi-eye-fill"></i>
                        <span class="view-number"><?= $mob['views'] ?></span>

                        <span class="like-wrapper"><i class="bi bi-suit-heart like"></i><span class="like-number">
                                <?= $mob['likes'] ?></span>
                        </span>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php
    }
}
?>