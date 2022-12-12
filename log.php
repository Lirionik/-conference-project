<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Confy</title>
	<link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main.css" >

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
    include("app/include/header.php");
    include("app/controllers/users.php");
    ?>

	<!-- Main part -->

    <div class="container reg_form">
        <form class="row justify-content-center" method="post" action="log.php">
            <h2 class="col-12 text-center">Log in</h2>
			<div class="mb-3 col-12 col-md-4 err">
            	<p><?=$errMsg?></p>
        	</div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="formGroupExampleInput" class="form-label">Your mail</label>
                <input name="email" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your email...">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="enter your password...">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <button type="submit" name="button-log" class="btn btn-secondary">Login</button>
                <a href="<?php echo BASE_URL . 'reg.php'?>">Sign up</a>
            </div>
        </form>
    </div>

	<!-- Include footer -->

	<?php include("app/include/footer.php"); ?>
	
</body>
</html>













