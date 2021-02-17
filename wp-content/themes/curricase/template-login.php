<?php
/*
Template Name: Login
*/
if (is_user_logged_in()); // TODO: Redirect logged user to dashboard

$errors = [];
$roles = ['candidate', 'recruiter'];

if (!empty($_POST['submit'])) {
    $username = checkXss($_POST['username']);
    $password = checkXss($_POST['password']);

    $errors = checkField($errors, $password, 'password', 6, 200);

    if (count($errors) == 0) {
        $user_login = wp_slash($username);
        $user_pass  = $password;

        $creds = [
            'user_login'    => $user_login,
            'user_password' => $user_pass,
            'remember'      => true
        ];

        $user = wp_signon($creds, false);

        if (is_wp_error($user)) {
            echo $user->get_error_message();
        } else {
            wp_redirect( home_url() );
        }
    }
}

get_header();
?>
<section id="register" class="content">
    <div class="container">
        <div class="register-container">
            <div class="register-content">
                <h1>Connectez vous!</h1>
                <form action="" class="form-register" method="post">
                    <input type="text" placeholder="Nom d'utilisateur" name="username">
                    <input type="password" placeholder="Mot de passe" name="password">
                    <button class="btn btn-orangePrimary" type="submit" name="submit" value="1">M'inscrire</button>
                </form>
            </div>
            <div class="register-content registred">
                <div class="already-registred">
                    <p>Vous n'avez pas encore de compte?</p>
                    <a href="<?php echo esc_url(home_url('register')); ?>">S'enregistrer</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();
