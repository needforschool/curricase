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

<<<<<<< HEAD
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="masthead" class="site-header">

			<div class="logo"></div>

			<img class="profileImg" src="https://meetanentrepreneur.lu/wp-content/uploads/2019/08/profil-linkedin.jpg" alt="photo de profile">

			<div class="bar"></div>
		</header><!-- #masthead -->
=======
<body class="site" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header id="header">
		<nav class="navbar">
			<div class="container">
				<a href="" class="nav-brand"><img src="<?= get_template_directory_uri() ?>/assets/img/logo/logo-square-bg-none.png" alt="Curicase Logo" class="nav-logo"><span>Curry</span>case</a>
				<ul class="nav">
					<li class="nav-item"><a href="" class="nav-link btn btn-orangePrimary">Commencer à créer</a></li>
					<li class="nav-item"><a href="" class="nav-link">Se connecter</a></li>
				</ul>
			</div>
		</nav>
	</header>
>>>>>>> origin/develop
