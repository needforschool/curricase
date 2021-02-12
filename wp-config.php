<?php

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

use Symfony\Component\Dotenv\Dotenv;

$basepath = realpath(dirname(__FILE__) . '.');

require $basepath . '/vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load($basepath . '/.env');

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', $_ENV['DB_NAME']);

/** Utilisateur de la base de données MySQL. */
define('DB_USER', $_ENV['DB_USER']);

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', $_ENV['DB_HOST']);

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&w:6,;a5,&dS5Y1.<Tf*_>=jko:K8XpkO3I/P21@<xWCITCf0>ZNr?_?Uess;o}o');
define('SECURE_AUTH_KEY',  'g2ExVt[;+%%_,-O4950!jI`H.52)O&|D} ie=(]ryq)I_sJWEpz[TGA3@Pxd||Lj');
define('LOGGED_IN_KEY',    'A<=s^sy?<Tfgy|SNnf*,U i_b$o5i/m`HIjFmbq` }viaQ>>Wc8UdM#-I1SD:n]<');
define('NONCE_KEY',        '!s#%bS)bSj1fS*}tuV!L~zL&.)]r$lb29xJDyB?o$A=*j^4~VW{<@v{|0Sx,2dzP');
define('AUTH_SALT',        'A@}$I4o+J_*E$[a,VW(N9j>@n.fQurx{^f.NW.*>TQN )3^1;ph8ZSC,y3P#k83-');
define('SECURE_AUTH_SALT', 'Ur./V{t[%3CmIheA{E3rU5WD5xoWioyxGSg@wVMSF)Iy^I<~EF~=nWdpYnZ-w{$T');
define('LOGGED_IN_SALT',   'K/dre{r#E$rI?Q`K+0X`~O6d_yUeM/ccD<eJM`!PN/m*k:(-n_;,+4e]OkO>AE/m');
define('NONCE_SALT',       '})~xSx%%0L? t<]Q AqU|9z7~2g%me6=tP=nkZmqDE2?Qw^IGAp#Xx~25M*@:@nr');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cc_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);


define('WP_HOME', $_ENV['WP_HOME']);
define('WP_SITEURL', $_ENV['WP_SITEURL']);
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
