<?php
/*
Template Name: Register
*/


get_header();
?>
<section id="register" class="content">
    <div class="container">
        <div class="register-container">
            <div class="register-content">
                <h1>Créez votre compte, gratuitement!</h1>
                <form action="" class="form-register" method="post">
                    <input type="text" placeholder="Nom" name="lastname">
                    <input type="text" placeholder="Prénom" name="firstname">
                    <input type="email" placeholder="Email" name="email">
                    <input type="password" placeholder="Mot de passe" name="password">
                    <input type="password" placeholder="Confirmer le mot de passe" name="password-confirm">
                    <div class="input-row">
                        <div class="role-container">
                            <input type="radio" name="role" value="recruiter">
                            <p>Recruteur</p>
                        </div>
                        <div class="role-container">
                            <input type="radio" name="role" value="candidate">
                            <p>Candidat</p>
                        </div>
                    </div>
                    <button class="btn btn-orangePrimary" type="submit" name="submit" value="1">M'inscrire</button>
                    <div class="accept-tos">
                        <input type="checkbox" name="tos" value="0">
                        <p>J'ai lu et j'accepte les conditions d'utilisation et politique de confidentialité de
                            Curricase</p>
                    </div>
                </form>
            </div>
            <div class="register-content registred">
                <div class="already-registred">
                    <p>Vous avez déjà un compte?</p>
                    <a href="#">Se connecter</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();

$errors = [];
if ($_POST['submit']) {
    $firstname = checkXss($_POST['firstname']);
    $lastname = checkXss($_POST['lastname']);
    $email = checkXss($_POST['email']);
    $password = checkXss($_POST['password']);
    $passwordConfirm = checkXss($_POST['password-confirm']);

    $errors = checkField($errors, $firstname, 'firstname', 2, 80);
    $errors = checkField($errors, $lastname, 'lastname', 2, 80);
    $errors = checkEmail($errors, $email, 'email');
    $errors = checkField($errors, $email, 'email', 6, 160);
    $errors = checkField($errors, $password, 'password', 6, 200);
    $errors = checkField($errors, $passwordConfirm, 'password-confirm', 6, 200);

    if ($password != $passwordConfirm) $errors['password-confirm'] == 'Les mots de passes ne sont pas identiques';
    if (count($errors) == 0) {
        $username = strtolower($firstname . $lastname);
        $user_login = wp_slash($username);
        $user_email = wp_slash($email);
        $user_pass  = $password;
        $userdata = compact('user_login', 'user_email', 'user_pass');
        wp_insert_user($userdata);
    }

    print_r($errors);
}

// echo '<pre>';
// print_r(wp_get_current_user());
// echo '</pre>';