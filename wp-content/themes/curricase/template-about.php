<?php
/*
Template Name: About Us
*/
get_header(); ?>

<section id="first">
    <div class="first-wrapper container">
        <div class="first-text">
            <p class="first-text-desc">Beaucoup plus qu'un CV</p>
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
                <p class="second-text-desc">Notre équipe d’experts en CV passionnés ont conçu Curricase pour inclure un créateur de CV facile d’emploi permettant à nos utilisateurs de concevoir un CV gagnant, sur base de modèles de CV spécifiques</p>
                <p class="second-text-desc last-para">Notre priorité c’est d’aider nos utilisateurs à perfectionner la tâche délicate d’écrire le parfait CV personnalisé afin de décrocher le poste de leur rêve !</p>
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
            <h2>Cyril B</h2>
            <p><a href="#">Linkedln</a></p>
        </div>
        <div class="card">
            <div class="img-about">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/recruteur.jpg" alt="about us">
            </div>
            <h2>Clement B</h2>
            <p><a href="#">Linkedln</a></p>
        </div>
        <div class="card">
            <div class="img-about">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/recruteur.jpg" alt="about us">
            </div>
            <h2>Jules G</h2>
            <p><a href="#">Linkedln</a></p>
        </div>
        <div class="card">
            <div class="img-about">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/recruteur.jpg" alt="about us">
            </div>
            <h2>Antoine K</h2>
            <p><a href="#">Linkedln</a></p>
        </div>
        <div class="card">
            <div class="img-about">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/recruteur.jpg" alt="about us">
            </div>
            <h2>Oummoul K</h2>
            <p><a href="#">Linkedln</a></p>
        </div>
    </div>

</section>





<?php get_footer();
