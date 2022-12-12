<?php
    include "path.php";
?>

<header class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a href="<?php echo BASE_URL ?>" class="navbar-brand">
            <img src="assets/img/name.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="<?php echo BASE_URL ?>" class="nav-link">Main</a>
                </li>
                <li class="nav-item">
                    <a href="all.php" class="nav-link">All conferences</a>
                </li>
                <li>
                    <?php if (isset($_SESSION['id'])): ?>
                    <a href="#" class="nav-link">
                        <i class="fa-regular fa-user"></i><?php echo $_SESSION['login']; ?>
                		<li><a href="<?php echo BASE_URL . 'admin/conferences/index.php'?>" class="nav-link"> Admin panel</a></li>
                		<li><a href="<?php echo BASE_URL . 'logout.php'?>" class="nav-link">Log out</a></li>
                	</a>
                <a href="admin/conferences/create.php" class="btn btn-light ml-auto" role="button">Create</a>
                <?php else: ?>
                <a href="<?php echo BASE_URL . 'log.php'?>" class="nav-link">Log in</a>
                <li><a href="<?php echo BASE_URL . 'reg.php'?>" class="nav-link">Sign up</a></li>
                <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</header>