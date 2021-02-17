<?php
/*
Template Name: Dashboard Recruteur
*/


$cvs = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}cv");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Dashboard Recruteur</title>
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
    <div class="flex-recruter">
        <div class="banner">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/logo-square-bg-none.png" alt="logo image">
        </div>
        <div class="container-img">
            <?php foreach ($cvs as $cv) {
                ?>
                <a href="http://localhost/WordPress/projet/nfactory-curricase/view_cv_recruteur/?id=<?php echo $cv->id; ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/modele<?php echo $cv->theme_id ; ?>.jpg" alt="modèle cv" class="modele"></a>
                <p class="jbname"> <?php echo $cv->profil_jobname; ?> </p>

                <?php
            } ?>
            
        </div>
    </div>



</body>

</html>