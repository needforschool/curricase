<?php
/*
Template Name: creatCV3
*/


get_header('createCV'); ?>

  <div id="creatcv3">
        <div class="title">
            <h1>Choisir un modèle</h1>
            <div class="progress">
                <a href="#"><img class="step1" src="<?php echo get_template_directory_uri() . '/assets/img/Ellipse 11.png' ?>" alt="première étape"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/Ellipse 15.png' ?>" alt="deuxième étape"></a>
                <a href="#"><img class="step3" src="<?php echo get_template_directory_uri() . '/assets/img/Ellipse 16.png' ?>" alt="dernière étape"></a>
            </div>
        </div>
        <div class="template">
            <form action="#">
                <ul>
                    <li><input type="radio" name="radio-choice" id="radio-choice-1" />
                        <label for="radio-choice-1"><img src="<?php echo get_template_directory_uri() . '/assets/img/templatecv1.png' ?>" alt="template_cv1" /></label>
                    </li>
                    <li><input type="radio" name="radio-choice" id="radio-choice-2" />
                        <label for="radio-choice-2"><img src="<?php echo get_template_directory_uri() . '/assets/img/templatecv2.png' ?>" alt="template_cv2" /></label></li>
                    <li><input type="radio" name="radio-choice" id="radio-choice-3" />
                        <label for="radio-choice-3"><img src="<?php echo get_template_directory_uri() . '/assets/img/templatecv3.png' ?>" alt="template_cv3" /></label></li>
                </ul>
            </form>
        </div>
        <div class="final">
            <a href="#"><button type="submit" name="radio-choice">Finaliser</button></a>
            <a href="#">Etape précédente</a>
        </div>
    </div>

<?php get_footer();