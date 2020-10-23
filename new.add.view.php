<?php require_once "partials/head.php" ?>
<?php
if (!isset($_SESSION['id'])){
    header("Location: index.php");
}
?>
<?php require_once "partials/navbar.php"?>
<?php $categories = getCategory();
?>
<div class="container">
    <div class="row">
        <div class="col-6 ffset-3">
            <h4 class="text-center m-3">Novi oglas</h4>
            <form action="new.add.php" method="post">
                <input type="text" name="title" placeholder="title" class="form-control"> <br>
                <input type="text" name="text" placeholder="text" class="form-control"> <br>
                <input type="number" name="price" placeholder="price" class="form-control"> <br>

                <select name="category" id="" class="form-control">
                    <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category['name']; ?>" class="form-control"><?php echo $category['name'] ?></option>
                    <?php endforeach; ?>
                </select> <br>
                <br>
                <button type="submit" class="btn btn-primary form-control">Add new</button>
            </form>
        </div>
    </div>
</div>
<?php require_once "partials/footer.php"?>
