<div class="btn-group">
    <button type="button" class="btn btn-danger">Cena</button>
    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="manje5000.php">5000 <</a>
        <a class="dropdown-item" href="5kdo10k.php">5000 - 10000</a>
        <a class="dropdown-item" href="vece10k.php">10000 ></a>

    </div>
</div>
<ul class="navbar-nav ml-auto">
    <li class="nav-item"><a href="user.view.php" class="nav-link"><?php echo $_SESSION['name'] ?></a></li>
    <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
</ul>
