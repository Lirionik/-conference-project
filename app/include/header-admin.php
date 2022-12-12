<header class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a href="../../index.php" class="navbar-brand" >
				<img src="../../assets/img/name.png">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a href="../../index.php" class="nav-link ">Main</a>
					</li>
					<li>
						<?php if (isset($_SESSION['id'])): ?>
							<a href="#" class="nav-link">
                            <i class="fa-regular fa-user"></i><?php echo $_SESSION['login']; ?>
                            </a>
							<li><a href="<?php echo BASE_URL . 'logout.php'?>" class="nav-link">Log out</a></li>
						<?php endif; ?>
					</li>
				</ul>
			</div>
		</div>
</header>


