<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'bogota_gastro');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ': ,6^Vm-wk~^#Yt8_4|a0x;A7x+pu_U*Z{8Cv`!k20u-Oi!P)+NY2P%mpwr %F)i');
    define('SECURE_AUTH_KEY', '6:hj|.z-.$18t+>D4I-:r~Q!E&6h(h3W;H[C^7w6;Z:I- Q7]}*dvWo=cj|W-+HG');
    define('LOGGED_IN_KEY', '~Y7*Ty&3.|>di|pwvtLZO>v6Y8Cq>?^VC,Q-G;S:_,I8m/*b3+hB[&G7Wf;|Tr~7');
    define('NONCE_KEY', 'UMp~1Ar21_f>Iv4Ssh|Y<i;tSW}gl`,|A9~#K9pg#Fx?SK:u&4Nwq+[-gNL]]WIK');
    define('AUTH_SALT', 'Cs*qYERAK5xcqrl:+xB>yXSAR{b-Bjzq$NB8D&bSA#S$sP]ajooGO,rItvu$+|yf');
    define('SECURE_AUTH_SALT', ':Rn2=(|J[N-_CHY_>q IE91dvQR*-=D]F_zk^=E$bg(9D Jq|DeE}i20e?+Ie#wB');
    define('LOGGED_IN_SALT', 'CmVWDt<HHokq(9;fkB.|9;8$XyTG*InP[!Mc>EsB_@p3(]GI%}Z`uJVa%2*%/?:m');
    define('NONCE_SALT', '*+[`Hh^t-4H~T;0-2-g>4%Oy@R4K|}u6-%{{q:i:I15&un[a?o8VH-&mfl<suR%5');
    

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');