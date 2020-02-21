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
define( 'DB_NAME', 'WordpressAfpa' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'O?Ffg7bgmQ~=d9+m<i=^=*tW6H]gp]#|17=,`jxVV_0P1It13w.1hT x=Pfa!cBi' );
define( 'SECURE_AUTH_KEY',  'NR7zosSDCm8V~k[or8Avw1^Po:]}<K{-+D-yE1>ayG>_pm^(cWjMxMgy(dbTMHxm' );
define( 'LOGGED_IN_KEY',    'F79[-sAL(eU?lB1o5~,nP(Fgg6!?yGAHe[Qr|(O=p9F^<tCeNWSAzGYKl@!&+*2o' );
define( 'NONCE_KEY',        '|Ak^5TWzhY#C,:Y_~IoU{K lOS|S?h!*7T=!n|?VC0,Zcm1/TEUr79W1wZ5Mly@F' );
define( 'AUTH_SALT',        '<(=zk`-04YVe_,oIf&lDNZJUPC)C*[V:)5yn0HZ!|?`xUs)SP[D!@5fU!p#C,#~;' );
define( 'SECURE_AUTH_SALT', ' }G/(+ME|AB>T~2Wd.f%XzlT3V[{_R.r&N|`oX4Wl;bnq8(Sd d|dx]u:qMec]O1' );
define( 'LOGGED_IN_SALT',   'BHhgsH,YnL2}M47In)lg-~Di|d=11marx#jvQ]!]oeDqNK,4ZPZpCnx}PrcC&1t+' );
define( 'NONCE_SALT',       'MbiLAWu[%gYm:wM&6#0gCJg,Q[6Z6COeXI$<4$3M!)+3SV9:n{)&0@4Kv)$NcZWq' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'af_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
