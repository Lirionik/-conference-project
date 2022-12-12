<?php 
include "app/database/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Confy</title>
	<link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/admin.css" >

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
	<!-- Include geader -->
	<?php 
    include("app/include/header-admin.php");
    include("app/controllers/conferences.php");
    ?>

<div class="container">
			<div class="conferences col-9">
				<div class="button row">
					<a href="create.php" class="col-2 btn">Add</a>
					<a href="index.php" class="col-2 btn">Manage</a>
				</div>

				<h2 class="text-center">Add conference</h2>

				<div class="row add-conference">
				<form action="create.php" method="post" enctype="multipart/form-data" class="form justify-content-center">
					<!-- Title -->
                    <div class="col-10">
                        <input value="" name="title" type="text" class="form-control" placeholder="Title" aria-label="Название статьи">
                    </div>
					<!-- Date -->
					<div class="input-group">
					<i class="fa fa-calendar"></i>
       					<input class="form-control col-5" id="date" name="date" placeholder="DD/MM/YYYY" type="text"/>
       				</div>
					<!-- Dropdown country -->
					<select class="select form-control col-5" id="select" name="country">
						<option value="Ukraine">
							Ukraine
						</option>
						<option value="Poland">
							Poland
						</option>
						<option value="Hungary">
							Hungary
						</option>
						<option value="Romania">
							Romania
						</option>
					</select>
					<div class="col-12 address">
      					<label class="form-label" for="address">
      					 Address
      					</label>
      					<input class="form-control" id="address" name="address" type="text"/>
     				</div>
                    <div class="col-12">
                        <label for="editor" class="form-label">Comments</label>
                        <textarea name="content" id="editor" class="form-control" rows="6"><?=$content; ?></textarea>
                    </div>
                
                    <div class="col">
                        <button name="add_conference" class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
				</div>
			</div>
		</div>
	</div>

	<!-- Include footer -->

	<?php include("app/include/footer.php"); ?>
	
</body>
</html>
