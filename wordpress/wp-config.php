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
define('DB_NAME', 'clan');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'icommerce2016');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'kLIR 3q=ABm{biy@<HWARKk?qMBxZWB@,2s:Dt2-QrfsxFBM7(]aelQ;r|GdVAFL');
define('SECURE_AUTH_KEY', 'mzChkK?OiBmk-8nPnYc@nE[<B*0dIKc7sI[i_>RopRp;sR3Jgnn++78%:WuPeZfB');
define('LOGGED_IN_KEY', '9_a&Dlw*QOY;*0Ci(97T)Mm^u?4`z]CB*dY&eB8l9K*ADuq&>^j#NCL<un_5j=8p');
define('NONCE_KEY', 'Ux77@qP(d1KrZ Iqlkv6lD_?VIK_}otK^v=s6HWsSW)f1xxr}?_43Q9*pMxbe+N_');
define('AUTH_SALT', '>|aL H?BsY]u3T_|;+2CFZsbt-6{1`bb!&2,wDs-V{fqXz9w= xDwf|KIvXs$9L|');
define('SECURE_AUTH_SALT', '<gx_BIqXT$j*Xsxty|QJ:WB.g@A,[n+JH zH+ln:CH}b=-YMR+(N!C8AAV&OJ-]2');
define('LOGGED_IN_SALT', 'gJI}EcMO#8-8*sj3ieGjOUGt4hK?Do%Sh)5GedkEP_;=/3%OL;SR36^!,KIu.BI ');
define('NONCE_SALT', 'u}W(PrSLeDeh:hgs.9UgJ[msK;(g $Dl3b?7B,Mp)vf#o/{hOx{ GWb~8ejVC;}`');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

