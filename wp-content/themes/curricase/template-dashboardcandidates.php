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
    <div class="banner">
        <div class="inside-banner">
            <a href="<?php echo esc_url(home_url()); ?>" title="Aller à la page d'acceuil"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/logo-square-bg-none.png" alt="logo image" class="logo-candidates"></a>
            <div class="creations">
                <h1>Mes Créations</h1>
                <a href="<?php echo esc_url(home_url('creatcv1')); ?>" class="btn btn-new">New +</a>
            </div>
        </div>

    </div>
    <div class="container-dash">
        <div class="cont-input">
            <i class="fas fa-search"></i>
            <input type="search" placeholder="chercher des créations" class="search" id="recherche">
            <p class="welcome">Bienvenue <?php echo (is_user_logged_in()) ? wp_get_current_user()->user_login : 'Se connecter'; ?></p>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/recruteur.jpg" alt="" class="recruteur">
        </div>
    </div>
    <div class="flex-recruter candidates">

        <div class="container-img">
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/modele1.jpg" alt="modèle cv" class="modele"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/modele2.jpg" alt="modèle cv" class="modele modele2"></a>
        </div>
    </div>

</body>

</html>