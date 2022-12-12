<?php 
include "app/database/db.php";
$conferences = selectAllsWithUsersOnIndex('conferences', 'users');
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
    <link rel="stylesheet" href="assets/css/main.css">

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
    <?php include "app/include/header.php";?>

    <!-- Main part -->

    <div class="container">
        <div class="container row">
            <div class="main-content col-md-9">
                <h2>All conferences</h2>
                <?php foreach ($conferences as $conference): ?>
                <div class="conf row">
                    <div class="col-4 map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2677.9816586745283!2d35.12377121563852!3d47.83994867920075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc67819dff96bd%3A0x2b8bd8d5aa306ebb!2sGroupBWT!5e0!3m2!1sru!2sua!4v1670430955873!5m2!1sru!2sua" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="conf_text col-8 col-md-8">
                        <h3>
                            <a href="<?=BASE_URL . 'single.php?post=' . $conference['id'];?>"><?=substr($conference['title'], 0, 80) . '...'  ?></a>
                        </h3>
                        <i class="far fa-user mr-14 mb-14"></i><?=$conference['user_name']?><br>
                        <i class="far fa-calendar mr-14 mb-14"></i><?=$conference['date']?><br>
                        <i class="fa-thin fa-map-location-dot"></i><?=$conference['address']?><br>
                        <i class="fa-solid fa-earth-africa"></i><?=$conference['country']?>
                        <p class="preview-text">
                            <?=mb_substr($conference['content'], 0, 55, 'UTF-8') ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Include footer -->

        <?php include("app/include/footer.php"); ?>

</body>

</html>