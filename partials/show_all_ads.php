<div class="row">
    <?php foreach ($oglasi as $oglas): ?>
        <div class="col-4">
            <div class="card mb-2 mt-2">
                <div class="card-header">
                    <a href="show.category.php?cat=<?php echo $oglas['category'] ?>" class="btn btn-secondary btn-sm">
                        <?php echo $oglas['category']; ?>
                    </a>
                </div>
                <div class="card-body text-center">
                    <h5><?php echo $oglas['title']?></h5>
                    <a href="single.oglas.php?id=<?php echo $oglas['id'] ?>" class="btn btn-light btn-sm">
                        Vidi oglas
                    </a>

                </div>
                <div class="card-footer">
                    <a href="oglasi_from_user.php?name=<?php echo $oglas['name'] ?>" class="btn btn-warning btn-sm float-left">
                        <?php echo $oglas['name'] ?>
                    </a>
                    <a href="perprice.php?price=<?php echo $oglas['price'] ?>" class="btn btn-danger btn-sm float-right">
                        <?php echo $oglas['price'] ?>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
