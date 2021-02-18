<?php
/*
Template Name: About Us
*/
get_header(); ?>

<section id="first">
    <div class="first-wrapper container">
        <div class="first-text">
            <p class="first-text-desc">Beaucoup plus qu'un outil</p>
            <h1 class="first-text-title">Bonjour ! Nous sommes Curricase</h1>

            <h2 class="second-text-title">Vous voulez mieux nous connaître ? Continuez à lire</h2>
        </div>
        <div class="first-image">
            <img class="first-img" src="<?php echo get_template_directory_uri() ?>/assets/img/about.png" alt="first image">
        </div>
    </div>
</section>

<section id="about">
    <div class="second-wrapper container">
        <div class="second-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/mission.png" alt="mission" class="mission-img">
        </div>
        <div class="second-text">
            <h1 class="second-text-title">Nous avons une mission</h1>
            <div class="apart">
                <p class="second-text-desc">Notre principal objectif est que n’importe quelle personne puisse créer des contenus spectaculaires, interactifs et animés. Nous voulons aider à améliorer la façon de présenter, communiquer, diffuser et enseigner.</p>
                <p class="second-text-desc last-para">Et nous sommes en train d’y arriver. Plus de 1.000.000 personnes dans plus de 190 pays créent déjà les contenus visuels du futur avec Genially.</p>
            </div>
        </div>
    </div>
</section>
<section id="team">
    <h1 class="team-title">
        Notre Equipe
    </h1>
    <p class="team-para">Nous aimons la technologie qui est faite pour les personnes, le joli design et les grandes idées.</p>
    <div class="team">
        <div class="card">
            <div class="img-about">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/recruteur.jpg" alt="about us">
            </div>
            <h2>Cyril Bationo</h2>
            <p>Lorem ipsum</p>
        </div>
        <div class="card">
            <div class="img-about">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/recruteur.jpg" alt="about us">
            </div>
            <h2>Cyril Bationo</h2>
            <p>Lorem ipsum</p>
        </div>
        <div class="card">
            <div class="img-about">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/recruteur.jpg" alt="about us">
            </div>
            <h2>Cyril Bationo</h2>
            <p>Lorem ipsum</p>
        </div>
        <div class="card">
            <div class="img-about">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/recruteur.jpg" alt="about us">
            </div>
            <h2>Cyril Bationo</h2>
            <p>Lorem ipsum</p>
        </div>
        <div class="card">
            <div class="img-about">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/recruteur.jpg" alt="about us">
            </div>
            <h2>Cyril Bationo</h2>
            <p>Lorem ipsum</p>
        </div>
    </div>

</section>





<?php get_footer();
