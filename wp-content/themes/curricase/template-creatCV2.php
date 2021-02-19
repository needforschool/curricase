<?php
/*
Template Name: creatCV2
*/
session_start();

$userID = get_current_user_id();

// Recup info Session

$prenom = $_SESSION['create_cv'][0];
$nom = $_SESSION['create_cv'][1];
$email = $_SESSION['create_cv'][2];
$telephone = $_SESSION['create_cv'][3];
$adresse = $_SESSION['create_cv'][4];
$cd = $_SESSION['create_cv'][5];
$ville = $_SESSION['create_cv'][6];
$birth = $_SESSION['create_cv'][7];
$lieu = $_SESSION['create_cv'][8];
$linkedin = $_SESSION['create_cv'][9];
$site = $_SESSION['create_cv'][10];



// Traitement PHP
$errors = array();
$success = false;

if (!empty($_POST['submitted'])) {
    $description     = cleanXss($_POST['description']);
    $titre       = cleanXss($_POST['titre']);
    $fonction     = cleanXss($_POST['fonction']);
    $localite     = cleanXss($_POST['localite']);
    $employeur     = cleanXss($_POST['employeur']);
    $depuis     = cleanXss($_POST['depuis']);
    $jusqua     = cleanXss($_POST['jusqua']);
    $description2     = cleanXss($_POST['description2']);
    $formation     = cleanXss($_POST['formation']);
    $localité   = cleanXss($_POST['localité']);
    $etablissement   = cleanXss($_POST['etablissement']);
    $datedebut   = cleanXss($_POST['datedebut']);
    $datefin   = cleanXss($_POST['datefin']);
    $description3     = cleanXss($_POST['description3']);
    $competence     = cleanXss($_POST['competence']);
    $niveau     = cleanXss($_POST['niveau']);



    $errors = ValidationText($errors, $description, 'description', 2, 150);
    $errors = ValidationText($errors, $titre, 'titre', 2, 50);
    $errors = ValidationText($errors, $fonction, 'fonction', 2, 50);
    $errors = ValidationText($errors, $localite, 'localite', 2, 20);
    $errors = ValidationText($errors, $employeur, 'employeur', 2, 50);
    $errors = ValidationText($errors, $depuis, 'depuis', 2, 30);
    $errors = ValidationText($errors, $jusqua, 'jusqua', 2, 30);
    $errors = ValidationText($errors, $description2, 'description2', 2, 150);
    $errors = ValidationText($errors, $formation, 'formation', 2, 30);
    $errors = ValidationText($errors, $linkedin, 'linkedin', 2, 30);
    $errors = ValidationText($errors, $localité, 'localité', 2, 60);
    $errors = ValidationText($errors, $etablissement, 'etablissement', 2, 60);
    $errors = ValidationText($errors, $datedebut, 'datedebut', 2, 30);
    $errors = ValidationText($errors, $datefin, 'datefin', 2, 30);
    $errors = ValidationText($errors, $description3, 'description3', 2, 150);
    $errors = ValidationText($errors, $competence, 'competence', 2, 30);
    $errors = ValidationText($errors, $niveau, 'niveau', 2, 30);

    global $wpdb;
    $wpdb->insert(
        $wpdb->prefix . 'cv',
        array(
            'firstname' => $prenom,
            'user_id' => $userID,
            'lastname' => $nom,
            'email' => $email,
            'phone_number' => $telephone,
            'adresse' => $adresse,
            'code_postal' => $cd,
            'ville' => $ville,
            'date_birth' => $birth,
            'place_birth' => $lieu,
            'profil_desc' => $description,
            'profil_jobname' => $titre,
            'created_at' => current_time('mysql'),
        ),
        array(
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
        )
    );

    $cvID = $wpdb->get_row("SELECT id FROM {$wpdb->prefix}cv ORDER BY id DESC LIMIT 1");
    $wpdb->insert(
        $wpdb->prefix . 'cv_socials',
        array(
            'id_cv' => $cvID->id,
            'linkedin' => $linkedin,
            'website' => $site,
        ),
        array(
            '%s',
            '%s',
        ),
    );
    $wpdb->insert(
        $wpdb->prefix . 'cv_experience',
        array(
            'id_cv' => $cvID->id,
            'fonction' => $fonction,
            'localité' => $localite,
            'employeur' => $employeur,
            'date_from' => $depuis,
            'date_to' => $jusqua,
            'description' => $description2,
        ),
        array(
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
        ),
    );
    $wpdb->insert(
        $wpdb->prefix . 'cv_skills',
        array(
            'id_cv' => $cvID->id,
            'title' => $competence,
            'level' => $niveau,
        ),
        array(
            '%s',
            '%s',
            '%s',
        ),
    );
    $wpdb->insert(
        $wpdb->prefix . 'cv_formation',
        array(
            'id_cv' => $cvID->id,
            'name' => $formation,
            'localite' => $localité,
            'etablissement' => $etablissement,
            'date_from' => $datedebut,
            'date_to' => $datefin,
            'description' => $description3,
        ),
        array(
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
        ),
    );






    $success = true;
}

if ($success == true) {
    wp_redirect(home_url('dashboard-candidate'));
} else {
    
}


get_header('createCV');
?>





<div class="form2">
    <form action="" method="post">
        <div class="section">
            <h2 class="title2">Profil</h2>
            <div class="content-form">

                <div class="content-formbox2">

                    <div class="box-form">
                        <label for="description"></label>
                        <textarea class="input3" name="description" id="description" placeholder="Description" value="<?php if (!empty($_POST['description'])) {
                                                                                                                            echo $_POST['description'];
                                                                                                                        } ?>"></textarea>
                        <p class="error"><?php if (!empty($errors['description'])) {
                                                echo $errors['description'];
                                            } ?></p>

                        <label for="titre"></label>
                        <input class="input3" type="text" name="titre" id="titre" placeholder="Titre" value="<?php if (!empty($_POST['titre'])) {
                                                                                                                    echo $_POST['titre'];
                                                                                                                } ?>">
                        <p class="error"><?php if (!empty($errors['titre'])) {
                                                echo $errors['titre'];
                                            } ?></p>

                    </div>
                </div>
            </div>
        </div>




        <div class="section" id="add-experience">
            <h2 class="title">Expériences professionnelles</h2>
            <div class="content-form3">
                <div class="content-formbox2">

                    <div class="minibox">
                        <label for="fonction"></label>
                        <input class="input2" class="input" type="text" name="fonction" id="fonction" placeholder="Fonction" value="<?php if (!empty($_POST['fonction'])) {
                                                                                                                                        echo $_POST['fonction'];
                                                                                                                                    } ?>">
                        <p class="error"><?php if (!empty($errors['fonction'])) {
                                                echo $errors['fonction'];
                                            } ?></p>

                        <label for="localité"></label>
                        <input class="input2" type="text" name="localite" id="localite" placeholder="Localité" value="<?php if (!empty($_POST['localite'])) {
                                                                                                                            echo $_POST['localite'];
                                                                                                                        } ?>">
                        <p class="error"><?php if (!empty($errors['localite'])) {
                                                echo $errors['localite'];
                                            } ?></p>
                    </div>

                    <div class="minibox2">
                        <label for="employeur"></label>
                        <input type="text" name="employeur" id="employeur" placeholder="Employeur" value="<?php if (!empty($_POST['employeur'])) {
                                                                                                                echo $_POST['employeur'];
                                                                                                            } ?>">
                        <p class="error"><?php if (!empty($errors['employeur'])) {
                                                echo $errors['employeur'];
                                            } ?></p>
                    </div>

                    <div class="minibox" id="minibox-date">
                        <div class="box-date">
                            <label id="title-date" for="title-date">Depuis</label>
                            <input class="input3" type="date" name="depuis" id="depuis" value="<?php if (!empty($_POST['depuis'])) {
                                                                                                    echo $_POST['depuis'];
                                                                                                } ?>">
                            <p class="error"><?php if (!empty($errors['depuis'])) {
                                                    echo $errors['depuis'];
                                                } ?></p>

                        </div>


                        <div class="box-date">
                            <label id="title-date" for="title-date">Jusqu'à</label>
                            <input class="input3" type="date" name="jusqua" id="jusqua" value="<?php if (!empty($_POST['jusqua'])) {
                                                                                                    echo $_POST['jusqua'];
                                                                                                } ?>">
                            <p class="error"><?php if (!empty($errors['jusqua'])) {
                                                    echo $errors['jusqua'];
                                                } ?></p>

                        </div>
                    </div>

                    <div class="minibox">
                        <label for="description"></label>
                        <textarea class="input2" type="text" name="description2" id="box-description" placeholder="Description" value="<?php if (!empty($_POST['description2'])) {
                                                                                                                                            echo $_POST['description2'];
                                                                                                                                        } ?>"></textarea>
                        <p class="error"><?php if (!empty($errors['description2'])) {
                                                echo $errors['description2'];
                                            } ?></p>



                    </div>
                    <div class="ajout">
                        <h3><i class="fas fa-plus-square"></i><a class="title-ajout" href="">Ajouter expériences professionnelles</a></h3>
                    </div>
                </div>
            </div>
        </div>



        <div class="section">
            <h2 class="title">Formation</h2>
            <div class="content-form3">
                <div class="content-formbox2">

                    <div class="minibox">
                        <label for="formation"></label>
                        <input class="input2" class="input" type="text" name="formation" id="formation" placeholder="Formation" value="<?php if (!empty($_POST['formation'])) {
                                                                                                                                            echo $_POST['formation'];
                                                                                                                                        } ?>"></textarea>
                        <p class="error"><?php if (!empty($errors['formation'])) {
                                                echo $errors['formation'];
                                            } ?></p>

                        <label for="localité"></label>
                        <input class="input2" type="text" name="localité" id="localité" placeholder="Localité" value="<?php if (!empty($_POST['localité'])) {
                                                                                                                            echo $_POST['localité'];
                                                                                                                        } ?>"></textarea>
                        <p class="error"><?php if (!empty($errors['localité'])) {
                                                echo $errors['localité'];
                                            } ?></p>
                    </div>

                    <div class="minibox2">
                        <label for="etablissement"></label>
                        <input type="text" name="etablissement" id="etablissement" placeholder="Etablissement" value="<?php if (!empty($_POST['etablissement'])) {
                                                                                                                            echo $_POST['etablissement'];
                                                                                                                        } ?>"></textarea>
                        <p class="error"><?php if (!empty($errors['etablissement'])) {
                                                echo $errors['etablissement'];
                                            } ?></p>
                    </div>

                    <div class="minibox" id="minibox-date">
                        <div class="box-date">
                            <label id="title-date" for="title-date">Depuis</label>
                            <input class="input3" type="date" name="datedebut" id="datedebut" value="<?php if (!empty($_POST['datedebut'])) {
                                                                                                            echo $_POST['datedebut'];
                                                                                                        } ?>"></textarea>
                            <p class="error"><?php if (!empty($errors['datedebut'])) {
                                                    echo $errors['datedebut'];
                                                } ?></p>

                        </div>


                        <div class="box-date">
                            <label id="title-date" for="title-date">Jusqu'à</label>
                            <input class="input3" type="date" name="datefin" id="datefin" value="<?php if (!empty($_POST['datefin'])) {
                                                                                                        echo $_POST['datefin'];
                                                                                                    } ?>"></textarea>
                            <p class="error"><?php if (!empty($errors['datefin'])) {
                                                    echo $errors['datefin'];
                                                } ?></p>

                        </div>
                    </div>

                    <div class="minibox">
                        <label for="description"></label>
                        <textarea class="input2" type="text" name="description3" id="box-description" placeholder="Description" value="<?php if (!empty($_POST['description3'])) {
                                                                                                                                            echo $_POST['description3'];
                                                                                                                                        } ?>"></textarea>
                        <p class="error"><?php if (!empty($errors['description3'])) {
                                                echo $errors['description3'];
                                            } ?></p>


                    </div>
                    <div class="ajout">
                        <h3><i class="fas fa-plus-square"></i><a class="title-ajout" href="">Ajouter formation</a></h3>
                    </div>
                </div>
            </div>
        </div>




        <div class="section">
            <h2 class="title">Compétences</h2>
            <div class="content-form3">
                <div class="content-formbox2">

                    <div class="minibox">
                        <label for="competence"></label>
                        <input class="input2" class="input" type="text" name="competence" id="competence" placeholder="Compétence" value="<?php if (!empty($_POST['competence'])) {
                                                                                                                                                echo $_POST['competence'];
                                                                                                                                            } ?>"></textarea>
                        <p class="error"><?php if (!empty($errors['competence'])) {
                                                echo $errors['competence'];
                                            } ?></p>

                        <label for="niveau"></label>
                        <input class="input2" type="text" name="niveau" id="niveau" placeholder="Niveau" value="<?php if (!empty($_POST['niveau'])) {
                                                                                                                    echo $_POST['niveau'];
                                                                                                                } ?>"></textarea>
                        <p class="error"><?php if (!empty($errors['niveau'])) {
                                                echo $errors['niveau'];
                                            } ?></p>

                    </div>
                    <div class="ajout">
                        <h3><i class="fas fa-plus-square"></i><a class="title-ajout" href="">Ajouter compétences</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="submit">
            <input id="btn-submit" type="submit" name="submitted" value="Etape suivante">
        </div>
    </form>
</div>


<?php






get_footer();
