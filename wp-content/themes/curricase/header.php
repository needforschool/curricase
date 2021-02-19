<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package curricase
 */

if (!empty($_GET['logout']) && $_GET['logout']) wp_logout();

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">

	<?php wp_head(); ?>
</head>

<body class="site" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header id="header">
		<nav class="navbar">
			<div class="container">
				<a href="<?php echo get_site_url('home') ?>" class="nav-brand"><img src="<?= get_template_directory_uri() ?>/assets/img/logo/logo-square-bg-none.png" alt="Curricase Logo" class="nav-logo"><span>Curri</span>case</a>
				<ul class="nav">
					<li class="nav-item"><a href="" class="nav-link btn btn-orangePrimary">Commencer à créer</a></li>
					<li class="nav-item"><a href="<?php echo (is_user_logged_in()) ? '?logout=true' : esc_url(home_url('login')); ?>" class="nav-link"><?php echo (is_user_logged_in()) ? wp_get_current_user()->user_login : 'Se connecter'; ?></a></li>
				</ul>
			</div>
		</nav>
	</header>