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
define( 'DB_NAME', 'soclean' );

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
define( 'AUTH_KEY',         'vZ,i[)L+vt({i8A@c~ULN! p )9d#w/ptIG1>)NiVu|/uMs+_csqkiwA/!HP*^hu' );
define( 'SECURE_AUTH_KEY',  'TeP&?X&_n85KQ0i}:RDGL@KQaL25y,N[ _l(t|V>P!*XhQz4e@/Eg|W2G@`zHldA' );
define( 'LOGGED_IN_KEY',    '%|k0/Fu$(Un.h;{GaDsi|P:|%/sk,{&rk$]N)[|&U_*^=ct4OY|5fwj?C~L)Z{H>' );
define( 'NONCE_KEY',        'l5kp+^1I1u:JfU#ok<8ZH OzY/6q.KDUe/A[H~rd]g6lU1g!ftswxB!J/pjP5.zF' );
define( 'AUTH_SALT',        'z~$e-Fq~e-r^iak]<q8x_pn:a%-.m,G++lr4l$z8246b8.w{:p $Rm[o$+/`_#8g' );
define( 'SECURE_AUTH_SALT', 'wd[+e3nn?2|7JjC<jU;kHw4.%{-.oF_5Np%y5rczOYkSKKw:(,_AL8}{O3HswQ0B' );
define( 'LOGGED_IN_SALT',   'GPu#szk0E9G)($%FO;R.n=f$$ct##7pQE3gI]![/dJCy!UFNB!D`TC;qDIw(cOf1' );
define( 'NONCE_SALT',       'u<V#Ca!|Lsp{L4Tlk`0 tHq&xG.Y/FVSDZeUSBHWeAPZwDazXA*?GFCDsDU0|!9B' );
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
