<?php 
include "../../app/controllers/conferences.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Confy</title>
	<link rel="shortcut icon" href="../../assets/img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../../assets/css/admin.css">

	<!-- Add fonts  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/7cc98fb694.js" crossorigin="anonymous"></script>
</head>
<body>

	<!-- Include header -->
	<?php include("../../app/include/header-admin.php"); ?>

	<div class="container">
			<div class="conferences col-9">
				<div class="button row">
					<a href="create.php" class="col-2 btn">Add</a>
					<a href="index.php" class="col-2 btn">Manage</a>
				</div>
				<div class="row title-table">
					<div class="id col-1">ID</div>
					<div class="title col-3">Title</div>
					<div class="author col-2">Author</div>
					<div class="red col-6">Control</div>
				</div>
				<?php foreach ($conferencesAdm as $key => $conference): ?>
				<div class="row conference">
					<div class="id col-1"><?=$key + 1;?></div>
					<div class="title col-3"><?=$conference['title'];?></div>
					<div class="author col-2"><?=$conference['user_name'];?></div>
					<div class="red col-2"><a href="edit.php?id=<?=$conference['id'];?>">Edit</a></div>
					<div class="del col-2"><a href="edit.php?delete_id=<?=$conference['id'];?>">Delete</a></div>
					<?php if ($conference['status']): ?>
						<div class="status col-2"><a href="edit.php?publish=0&pub_id=<?=$conference['id'];?>">To draft</a></div>
					<?php else: ?>
						<div class="status col-2"><a href="edit.php?publish=1&pub_id=<?=$conference['id'];?>">Publish</a></div>
					<?php endif; ?>
				</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>


	<!-- Include footer -->

	<?php include("../../app/include/footer.php"); ?>

	
</body>
</html>