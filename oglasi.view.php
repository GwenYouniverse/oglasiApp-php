<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php"?>
<?php $oglasi = getAll(); ?>
<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <h1 class="display-4 text-center">Svi oglasi</h1>
            <?php require_once "partials/show_all_ads.php"?>
        </div>
    </div>
</div>
<?php require_once "partials/footer.php"?>
