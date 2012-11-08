<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp_run4fun');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'wp_run4fun');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'wp_run4fun');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C}oFBhT,s_m[^E#t@Vz2_vbO5/g^`Q4uI!LY1BUaO&3b-&hDOrUsl!F<4`kZ*YnY');
define('SECURE_AUTH_KEY',  'atLEzrF-Nl(9Fk1W&mEx6[UPrt=IW?AN0JdT3;dEd)B)?siGH*Xb2}0S39]-C-8*');
define('LOGGED_IN_KEY',    'AfEMMS|4(J7LEcICvwPl;#G]4?3>LUz=Lq9T3ZcJKx|@x(mm~(0$v8k4|L&l)I{s');
define('NONCE_KEY',        'D[r%}H/FD0i![$ZE[@^fS%-mn=}U5dAW7Wd{w?o!ViAj}kr3.*O3$5>AgBlAPp);');
define('AUTH_SALT',        'utr~Sn22a`/51:gt|@rs5CvUe@S}Qs.{dOf3Q&pi*%F.-Plvl`vj3[@zgRksl#mO');
define('SECURE_AUTH_SALT', 'MxO?Qt>Bw-YA1s-LpO1WD{R=a^wPEKh*}>bdnLS~k~G8WYfELf:n~Mzie0unp%:)');
define('LOGGED_IN_SALT',   'AnnP_dw!:HNQ,.F7x9,*dhZd@DN;R.=A55Maqw[YT^ecPo))_x]bIGt%LgK1(7g%');
define('NONCE_SALT',       'A#_Q@Oyd`y[m;#&u_nA?J_r<7W>`+3GbuX^.y3hMgMhM%o][m|1_ACDtm@1F(!oe');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');