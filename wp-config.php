<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'meirluxuxry' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
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
define( 'AUTH_KEY',         '9>jMN})v3S!0Irizt!%>#F#O1#j4)!EZ|NaO0,i}*QP[/0=~.P.^nZmboA{1&(]y' );
define( 'SECURE_AUTH_KEY',  '*n/A?F0DMGCiSsf!aN9>LF#Y}/Ro`hAqFu@Lw*^V.aYRHjq=I(nc`E~jqx(ag_4g' );
define( 'LOGGED_IN_KEY',    'b`avIKW^q17C Rh4;03PSp4*SN}!(uejxaM{CJ+2A~>1y*d$IUP_>iLGYidAhW[F' );
define( 'NONCE_KEY',        '*a gEi;Xy_k;LC)oi)@c*8fjdH:H.2Oxm# Q!rd@yj:KNWYRd20+ DF),dJwWg*$' );
define( 'AUTH_SALT',        'A}yE[Cp+g6C2<Iq=p4n}~x8%,+IW(S2&.mOTBfDyWQd13mlek`fE22  g{%P5_.C' );
define( 'SECURE_AUTH_SALT', 'yh*2qSMxl0#w<ycD|T)^i80R0wj[:q)3mT+I%mr6&F6_$/(T^zwhDZd3syodD6EO' );
define( 'LOGGED_IN_SALT',   'UA$JQs5AFifuy`C;;y$-.YpvYtM}UTg73+m`cC73,I#ZESXG^E4}1&y7e&~[,uiH' );
define( 'NONCE_SALT',       'T~Kh}R2sn `rX$YF,_G}$Lzkq uBm,b/tcNU%An[3{z4I5*E=M9+!gMC1yAp?]aN' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
