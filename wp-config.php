<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'relaisviumvigie');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'relaisviumvigie');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'vigie2015');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mysql55-11.perso');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

define('WP_HOME','http://www.relais-vigienature.fr');
define('WP_SITEURL','http//www.relais-vigienature.fr');

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
define('AUTH_KEY',         '^$I>m._2p_80Qu8lY 2j*FF+vWp@@hz8BC@q9ypc.[WdJ6r>>#mt]i1i._P43*?]');
define('SECURE_AUTH_KEY',  'Qz#/]-q93b8}>~+5Scz2++_G7HJi35n0wg}$,ypIE5q}.uN3vCljBfvi$(=GUDp)');
define('LOGGED_IN_KEY',    'x1!j1|8Dk8uD=@e^zo+q|h)I^gyOdk0U&!@NZ|,RhG[$PL@_dg3hOfdZ`L<W1gXj');
define('NONCE_KEY',        '`!6u(Q[6B?JXC2N8V>I>srUm=l+o3dv;^&I.(2?Dz<(y3>kycd<ki<AYK&n3oK+J');
define('AUTH_SALT',        'aJWq3o2GoGhuNCN4;Qj+aMpZ((kea^MSr7L@rwzyK1K/rzl4/4XVmK,M&:%#q?[E');
define('SECURE_AUTH_SALT', 'a:+Tj$|Mx3i#Bcw_KqpGILWTB?k-4X^gU#C]/Y9J|XUaU]u8++NQ]1+)lX8hm%*q');
define('LOGGED_IN_SALT',   't|+WQN{/SCac+bRe97.B{$5k VSDrDn9X3 vlb+q-vQW%Gt?I.,6x``JWiq>N)P*');
define('NONCE_SALT',       'IH$ug+WARrNt$z8A3q/x%uMX.<6yX.&q,u&]conBi5|UAEoo#r|;JE8R+cK+T]sM');
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