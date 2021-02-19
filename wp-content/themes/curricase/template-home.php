<?php
/*
Template Name: Home
*/
get_header(); ?>
<section id="first">
        <div class="first-wrapper container">
            <div class="first-text">
                <p class="first-text-desc">Créez rapidement des CV vu par un grand nombre de recruteurs</p>
                <h1 class="first-text-title">Bienvenue à la nouvelle génération de Cv</h1>


                <a href="<?php echo esc_url(home_url('register')); ?>" class="btn btn-one">Créer un compte gratuit</a>

            </div>
            <div class="first-image">
                <img class="first-img" src="<?php echo get_template_directory_uri() ?>/assets/img/img_cv1.png" alt="first image">
            </div>
        </div>
    </section>
    <section id="second">
        <div class="second-wrapper container">
            <div class="second-img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/1057-536x354.jpg" alt="summer" class="tempo-img">
            </div>
            <div class="second-text">
                <h1 class="second-text-title">L'outil qui donne vie aux Cv</h1>
                <div class="apart">
                    <p class="second-text-desc">Découvrez la nouvelle génération de Cv!</p>
                    <p class="second-text-desc last-para">Maintenant tout le monde peut créer d'incroyables Cv et trouver des
                        recruteurs facilement.</p>
                </div>

            </div>
        </div>

    </section>
    <section id="third">
        <div class="third-wrapper container">
            <h1 class="third-title">Vous ne créez pas encore des CV géniaux ?</h1>
            <a href="<?php echo esc_url(home_url('register')); ?>" class="btn btn-two">Inscrivez-vous Gratuitement</a>
            <div class="third-image">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_cv2.png" alt="girl" class="third-img">
            </div>
        </div>

    </section>

<?php get_footer();