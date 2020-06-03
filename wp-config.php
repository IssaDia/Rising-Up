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
define( 'DB_NAME', 'mattproject' );

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
define( 'AUTH_KEY',         'g(< WLUfY3PMR8[I%k={Q)dVy:EV`e_Xt6lU;2e(-4dcVV?yj0<LKhEGU=_[*~lm' );
define( 'SECURE_AUTH_KEY',  '~z}2#5(UdfghsOygX$qQ:ce7j8}@lYNqq78zhBh%Sh&yQzjuH@.ZQ!CdpB!=1^*P' );
define( 'LOGGED_IN_KEY',    'jLt*!t.~ku0bU5&yZeqVYQ.^ZV|0kYO)XdQ M_YguD?AMV[5BgA.+IJ*9KF,l@s6' );
define( 'NONCE_KEY',        '8=8g)q1Ry@IK+;*gv|@<W>44f) 3%z|D*Mysaq15(cVD}&r;z=N:wW4[J ,Ki*m9' );
define( 'AUTH_SALT',        'tv_ZL7W02}*96CS}*uo%B9^%=It*S_-Kk =w%!UB9;n@=.Ry0@>XpS<m.^ul}IS8' );
define( 'SECURE_AUTH_SALT', ')KV&j;ksO*v)d>vmlXRo]MvtO6-*fM/Y#om6@t#[0(5HC9$|fR&;Q#NXp9Zl|4Q9' );
define( 'LOGGED_IN_SALT',   'QrW=YcnCV-A3#@M{:sx^.yvZ4~(_-)DxWR jGLx;!74nL[INa]Cq*3:|Q 69,Wo*' );
define( 'NONCE_SALT',       'Lv[{Ogo<iz;f_/_JRru1R,^$r+5;fXl!A5h5Y&/Yb+.dRTl~x ?cD0=rjwYQC!)4' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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

define('FS_METHOD', 'direct');

