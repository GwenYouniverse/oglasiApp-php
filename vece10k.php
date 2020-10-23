<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php"?>
<?php
$oglasi = vece10k();
?>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <h3 class="display-4 text-center"> 10000 > </h3>
            <?php require_once "partials/show_all_ads.php"?>

        </div>
    </div>
</div>

<?php require_once "partials/footer.php"?>
