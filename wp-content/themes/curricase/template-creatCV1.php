<?php
/*
Template Name: creatCV1
*/

session_start();
// Traitement PHP
$errors = array();
$success = false;

if (!empty($_POST['submitted'])) {
    $prenom     = cleanXss($_POST['prenom']);
    $nom       = cleanXss($_POST['nom']);
    $email     = cleanXss($_POST['email']);
    $telephone     = cleanXss($_POST['telephone']);
    $adresse     = cleanXss($_POST['adresse']);
    $cd     = cleanXss($_POST['cd']);
    $ville     = cleanXss($_POST['ville']);
    $birth     = cleanXss($_POST['birth']);
    $lieu     = cleanXss($_POST['lieu']);
    $linkedin     = cleanXss($_POST['linkedin']);
    $site   = cleanXss($_POST['site']);


    $errors = ValidationText($errors, $prenom, 'prenom', 2, 50);
    $errors = ValidationText($errors, $nom, 'nom', 2, 50);
    $errors = emailValidation($errors, $email, 'email');
    $errors = ValidationText($errors, $telephone, 'telephone', 2, 20);
    $errors = ValidationText($errors, $adresse, 'adresse', 2, 50);
    $errors = ValidationText($errors, $cd, 'cd', 2, 5);
    $errors = ValidationText($errors, $ville, 'ville', 2, 30);
    $errors = ValidationText($errors, $birth, 'birth', 2, 10);
    $errors = ValidationText($errors, $lieu, 'lieu', 2, 30);
    $errors = ValidationText($errors, $linkedin, 'linkedin', 2, 30);
    $errors = ValidationText($errors, $site, 'site', 2, 60);



    print_r($_POST);

    if (count($errors) == 0) {
        $_SESSION['create_cv'] = [];
        foreach ($_POST as $profil => $value) {
            switch ($profil) {
                case 'email':
                case 'name':
                case  'prenom':
                case  'nom':
                case  'email':
                case  'telephone':
                case  'adresse':
                case  'cd':
                case  'ville':
                case  'birth':
                case  'lieu':
                case   'linkedin':
                case   'site':
                case   'created_at':
                    $_SESSION['create_cv'][] = $value;
                    break;
            }
           
            
        }
       
        // wp_redirect(site_url() . "/creatCV2");
        //     exit;
        

        wp_redirect(site_url('creatCV2'));
        exit;
    }
}
get_header('createCV');
?>

<div class="form">
    <form action="" method="post">
        <div class="section">
            <h2 class="title">Mes données</h2>
            <div class="content-form">
                <div class="content-formbox1">
                    <div class="boxphoto">
                        <div class="boxphoto2">
                            <label for="profil"><i class="fas fa-camera-retro"></i></label>
                            <input type="file" name="profil" id="profil" accept="image/png, image/jpeg">
                        </div>
                    </div>

                </div>
                <div class="content-formbox2">

                    <div class="minibox">
                        <label for="prenom"></label>
                        <input class="input2" class="input" type="text" name="prenom" id="prenom" placeholder="Prénom" value="<?php if (!empty($_POST['prenom'])) {
                                                                                                                                    echo $_POST['prenom'];
                                                                                                                                } ?>">
                        <p class="error"><?php if (!empty($errors['prenom'])) {
                                                echo $errors['prenom'];
                                            } ?></p>

                        <label for="nom"></label>
                        <input class="input2" type="text" name="nom" id="nom" placeholder="Nom" value="<?php if (!empty($_POST['nom'])) {
                                                                                                            echo $_POST['nom'];
                                                                                                        } ?>">
                        <p class="error"><?php if (!empty($errors['nom'])) {
                                                echo $errors['nom'];
                                            } ?></p>
                    </div>


                    <div class="minibox">

                        <label for="email"></label>
                        <input class="input2" type="email" name="email" id="email" placeholder="E-mail" value="<?php if (!empty($_POST['email'])) {
                                                                                                                    echo $_POST['email'];
                                                                                                                } ?>">
                        <p class="error"><?php if (!empty($errors['email'])) {
                                                echo $errors['email'];
                                            } ?></p>

                        <label for="tel"></label>
                        <input class="input2" type="text" name="telephone" id="telephone" placeholder="Numéro de téléphone" value="<?php if (!empty($_POST['telephone'])) {
                                                                                                                                        echo $_POST['telephone'];
                                                                                                                                    } ?>">
                        <p class="error"><?php if (!empty($errors['telephone'])) {
                                                echo $errors['telephone'];
                                            } ?></p>

                    </div>
                    <div class="minibox2">
                        <label for="adresse"></label>
                        <input type="text" name="adresse" id="adresse" placeholder="Adresse" value="<?php if (!empty($_POST['adresse'])) {
                                                                                                        echo $_POST['adresse'];
                                                                                                    } ?>">
                        <p class="error"><?php if (!empty($errors['adresse'])) {
                                                echo $errors['adresse'];
                                            } ?></p>
                    </div>

                    <div class="minibox">
                        <label for="postal"></label>
                        <input class="input2" type="text" name="cd" id="cd" placeholder="Code postal" value="<?php if (!empty($_POST['cd'])) {
                                                                                                                    echo $_POST['cd'];
                                                                                                                } ?>">
                        <p class="error"><?php if (!empty($errors['cd'])) {
                                                echo $errors['cd'];
                                            } ?></p>

                        <label for="ville"></label>
                        <input class="input2" type="text" name="ville" id="ville" placeholder="Ville" value="<?php if (!empty($_POST['ville'])) {
                                                                                                                    echo $_POST['ville'];
                                                                                                                } ?>">
                        <p class="error"><?php if (!empty($errors['ville'])) {
                                                echo $errors['ville'];
                                            } ?></p>
                    </div>


                    <div class="minibox">
                        <label for="birth"></label>
                        <input class="input2" type="date" name="birth" id="birth" placeholder="Date de Naissance" value="<?php if (!empty($_POST['birth'])) {
                                                                                                                                echo $_POST['birth'];
                                                                                                                            } ?>">
                        <p class="error"><?php if (!empty($errors['birth'])) {
                                                echo $errors['birth'];
                                            } ?></p>


                        <label for="lieu"></label>
                        <input class="input2" type="text" name="lieu" id="lieu" placeholder="Lieu de Naissance" value="<?php if (!empty($_POST['lieu'])) {
                                                                                                                            echo $_POST['lieu'];
                                                                                                                        } ?>">
                        <p class="error"><?php if (!empty($errors['lieu'])) {
                                                echo $errors['lieu'];
                                            } ?></p>
                    </div>


                    <div class="minibox">
                        <label for="linkedin"></label>
                        <input class="input2" type="text" name="linkedin" id="linkedin" placeholder="Linkedin" value="<?php if (!empty($_POST['linkedin'])) {
                                                                                                                            echo $_POST['linkedin'];
                                                                                                                        } ?>">
                        <p class="error"><?php if (!empty($errors['linkedin'])) {
                                                echo $errors['linkedin'];
                                            } ?></p>

                        <label for="site"></label>
                        <input class="input2" type="text" name="site" id="site" placeholder="Site internet" value="<?php if (!empty($_POST['site'])) {
                                                                                                                        echo $_POST['site'];
                                                                                                                    } ?>">
                        <p class="error"><?php if (!empty($errors['site'])) {
                                                echo $errors['site'];
                                            } ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="submit">
            <input id="btn-submit" type="submit" name="submitted"  value="Etape suivante">
        </div>
    </form>
</div>







</div>

<?php
get_footer();
