<?php
/*
Template Name: Candidates
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Dashboard candidats</title>
</head>

<body>
    <div class="container-dash">
        <div class="cont-input">
            <i class="fas fa-search"></i>
            <input type="search" placeholder="chercher des créations" class="search" id="recherche">
            <p class="welcome">Bienvenue Nom prenom</p>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/recruteur.jpg" alt="" class="recruteur">
        </div>
    </div>
    <div class="flex-recruter candidates">
        <div class="banner">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/logo-square-bg-none.png" alt="logo image" class="logo-candidates">
            <div class="creations">
                <h1>Mes Créations</h1>
                <a href="#" class="btn btn-new">New +</a>
            </div>
        </div>
        <div class="container-img">
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/modele1.jpg" alt="modèle cv" class="modele"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/modele2.jpg" alt="modèle cv" class="modele modele2"></a>
        </div>
    </div>

</body>

</html>