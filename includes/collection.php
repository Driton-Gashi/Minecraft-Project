<?php
function get_collection($args = null)
{
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
        <div class="collection-body">
        </div>
    </div>
</div>
<?php
}
?>