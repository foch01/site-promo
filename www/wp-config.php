<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/codeacadwx/www/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'codeacadwx01');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'codeacadwx01');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Facesimpl0n');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'codeacadwx01.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r4d%Y++![5R8{:`W}qxD4[jNwo-]Y!6rMMC#cg15a30Weq.$jRw=-nik,tLTucA2');
define('SECURE_AUTH_KEY',  '{ F`e;;2#M=gX-8S7IE5QhJC3[-y~>cyPR!Jqx_A<{k_omKZb)4xo8XRkIjYZNYd');
define('LOGGED_IN_KEY',    '>c6uai9}qH%=ow-Y#b_.F3kV/V<d*R@p8$bMb;*@|1Lp):RTZx5L1(e7kZ9[rSqv');
define('NONCE_KEY',        'r}36E_I0{sTjQrblOTInmxda:Wxfr,_3=3uQ?|r1&+ssm#+_|9C7jl~PWk5E:VI=');
define('AUTH_SALT',        'N^4o>}/aGf/JV2],sGOI`9vNVVO(b fnPx-m_t{N}+wbdtp-pzj-nuQ82D?!=b=L');
define('SECURE_AUTH_SALT', ' 5I.2@/~}h_^V0sivCEpl3dv,e-8&P6J1J?5;fjm>@T3+KmD`NJI,~|64aU9&aGx');
define('LOGGED_IN_SALT',   'Ae&eD*h+#(+bAg].`oC;PXbf@iYT{J$;A7luBc/`{^I))hn~$<=dJv~;FRjA[_s>');
define('NONCE_SALT',       'FPeJELYC)Nf8/alI!yzo>(YCq%;0 #5hXBF}`3e#}NQd6E`qmL8!xlJF|d<#=4PW');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_promo_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');