<?php
/*
Template Name: Recruteur
*/

get_header();


$id = $_GET['id'];

$info = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}cv WHERE id=$id ");

$socials = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}cv_socials WHERE id=$id ");

$skills = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}cv_skills WHERE id=$id ");

$formation = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}cv_formation WHERE id=$id ");

$experience = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}cv_experience WHERE id=$id ");


?>
<div class="content">
    <div class="titrecv">
        <h1><?php echo $info->firstname . ' ' . $info->lastname; ?></h1>
    </div>
    <div class="content-cv">
        <div class="bigboxcv">
            <div class="resume">
                <div class="resume_left">

                    <div class="resume_content">
                        <div class="resume_item resume_info">
                            <div class="title">
                                <p class="bold"><?php echo $info->firstname . ' ' . $info->lastname; ?></p>
                                <p class="regular"><?php echo $info->profil_jobname; ?></p>
                                <p id="naissance" class="regular"><?php echo $info->date_birth; ?></p>
                                <p id="localité" class="regular"><?php echo $info->place_birth; ?></p>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">

                                    </div>
                                    <div class="data">
                                        <?php echo $info->adresse . ' ' . $info->code_postal; ?> <br /> <?php echo $info->ville; ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">

                                    </div>
                                    <div class="data">
                                        <?php echo $info->phone_number; ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">

                                    </div>
                                    <div class="data">
                                        <?php echo $info->email; ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">

                                    </div>
                                    <div class="data">
                                        <?php echo $socials->website; ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="resume_item resume_skills">
                            <div class="title">
                                <p class="bold">Compétences</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="skill_name">
                                        <?php echo $skills->title . ' ' . $skills->level; ?>
                                    </div>

                                </li>
                                <li>
                                    <div class="skill_name">

                                    </div>

                                </li>
                                <li>
                                    <div class="skill_name">

                                    </div>

                                </li>
                                <li>
                                    <div class="skill_name">

                                    </div>

                                </li>
                                <li>
                                    <div class="skill_name">

                                    </div>

                                </li>
                            </ul>
                        </div>
                        <div class="resume_item resume_social">
                            <div class="title">
                                <p class="bold">Social</p>
                            </div>
                            <ul>

                                <li>
                                    <div class="icon">

                                    </div>
                                    <div class="data">
                                        <p class="semi-bold">Linkedin</p>
                                        <p><?php echo $socials->linkedin; ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="resume_right">
                    <div class="resume_item resume_about">
                        <div class="title">

                            <p><?php echo $info->profil_desc; ?></p>
                        </div>
                        <div class="resume_item resume_work">
                            <div class="title">
                                <p class="bold">Expériences Professionnelles</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="date"><?php echo $experience->date_from . ' - ' . $experience->date_to; ?></div>
                                    <div class="info">
                                        <p class="semi-bold"><?php echo $experience->fonction;; ?></p>
                                        <p id="nomemployeur" class="semi-bold"><?php echo $experience->employeur; ?></p>
                                        <p id="localité"><?php echo $experience->localité; ?></p>
                                        <p><?php echo $experience->description; ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="resume_item resume_education">
                            <div class="title">
                                <p class="bold">Formation</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="date"><?php $formation->date_from . ' - ' . $formation->date_to; ?></div>
                                    <div class="info">
                                        <p class="semi-bold"><?php $formation->name; ?></p>
                                        <p id="nomemployeur" class="semi-bold"><?php echo $formation->etablissement; ?></p>
                                        <p id="localité"><?php echo $formation->localite; ?></p>
                                        <p><?php echo $formation->description; ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>


    </div>
    <div class="btncv">
        <ul class="boxbtn">

            <li class="nav-cv"><a href="">Export PDF</a></li>
    </div>

</div>

<?php get_footer();
