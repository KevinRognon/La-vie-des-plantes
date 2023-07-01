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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'fucu_db' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?27_TR&vv`n@Z$AHgCSGy.kOEEd^VGhi)Wfb#(IcE2mXE/(2W]@p;` oE&4 g4>2' );
define( 'SECURE_AUTH_KEY',  '[^m:r}1lNBayA{n`*61}yiH~@wuZBVwmaeYjRU6@o&i=Xs*g{c<rGZZ{D,hDM3L9' );
define( 'LOGGED_IN_KEY',    '_o#rdqCXv%2yO:z^TMS&p$Ga&Xp5VdVgh /3-^!dCql$gz*]FwW&. C7AeKtLu*p' );
define( 'NONCE_KEY',        'O32lz=K`m3q:]<vq tB_0|sgU^B@Q7!IV!PH;,z_!<M]^W{ik}[:O.3HsXN,6}b7' );
define( 'AUTH_SALT',        'Vy<!+&^A&P#.lS];p49bcop)>UPQU;4AmAH&tWcWtWI.s0aJV!ER+f?#?2=`X?}j' );
define( 'SECURE_AUTH_SALT', '~p`;}$?{C`f5|)H[>9E3UM&MOB$q9w-87cGm?r].(7602YoUJ@mLToFrJ~a:0mR@' );
define( 'LOGGED_IN_SALT',   '9chbh-hZ(+t#W!jF}Y/E$k1O#fbiz6igjbFOCi5~hfW1rM}bY=BuemGJQ :ClxN3' );
define( 'NONCE_SALT',       'VRgq&yfnbP<P?FM(j]G4nia[l&h^B${6G_bg-G!uTc>0L$<IK$6LZ]QXej|a_n_`' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
