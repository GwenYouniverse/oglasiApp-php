<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php"?>
<?php
$oglasi = getCat($_GET['cat']); ?>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <h3 class="display-4 text-center"><?php echo $_GET['cat']; ?></h3>
            <?php require_once "partials/show_all_ads.php"?>
        </div>
    </div>
</div>

<?php require_once "partials/footer.php"?>
