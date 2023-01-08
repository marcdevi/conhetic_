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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'conhetic' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '+@y&AfNOQudzdA;3%HMrJ`(+NU`iwRM$X& Kv;h<DU&?gBl+@J$*#W.%4K~0,bPr' );
define( 'SECURE_AUTH_KEY',  'q1mIEfZ5VX8izz4yzjt$$dC3f2`x|C3-jaJc8Rw__@GocF{7sJn4nZ-}zd#eWtrH' );
define( 'LOGGED_IN_KEY',    'LbE0FqWy??7U-6Lk3eN,0UqO8/^NrrM=4Kh(?XM46X?Id]VCicyGQ{{c:H+~RGCF' );
define( 'NONCE_KEY',        '`4~W5r_R_o8}xv]I?nL2LKYb/x: vYTjgoG1</{[BY[/U}`o6:]C |e9`_HUXNFc' );
define( 'AUTH_SALT',        '^f]/N6t$Be>,hIUyI#D$^_{t{6:3co.|X{}BB+Zh{JO Z;(:Kf@1TINcy,uXh^kP' );
define( 'SECURE_AUTH_SALT', 'YCH!,{A.1Y62</T6DPiU<S7LC0:)*a0cRj7;U0+=39S)IZw81Y<k{.!W9B1YWB_g' );
define( 'LOGGED_IN_SALT',   '.7dn{I8$wj.po~xA[+!K8G{oEJjBpC@fn-]]C$/Iva(kYl>,$^~oe<%hsobIU6{D' );
define( 'NONCE_SALT',       '(K+[i9q%;TDA*/O`5_i*;nDIkb}YA_@C(NnQvJkTKs@I3yYf}2ATn}96z^;H5oea' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
