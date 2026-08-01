<?php
/**
 * ============================================
 * IPTV-SPA 2026
 * Archivo de configuración
 * Compatible con PHP 8+
 * ============================================
 */

session_start();

/*
|--------------------------------------------------------------------------
| Configuración general
|--------------------------------------------------------------------------
*/

define('APP_NAME', 'IPTV-SPA 2026');
define('APP_VERSION', '1.0.0');

/*
|--------------------------------------------------------------------------
| Usuario administrador
|--------------------------------------------------------------------------
|
| Usuario:
| admin
|
| Contraseña:
| Admin2026@
|
| Para cambiar la contraseña:
| 1. Ve a https://www.phpliveregex.com/password_hash
| 2. Genera un nuevo password_hash()
| 3. Sustituye la línea PASSWORD_HASH
|
*/

define('ADMIN_USER', 'admin');

define(
    'PASSWORD_HASH',
    '$2y$10$EIX6g1j8Wk0Q3v9M9mXv8eYdQ1M6O4K5qVxwQmM9o8Y2P5tJxWm7C'
);

/*
|--------------------------------------------------------------------------
| Ruta de descarga
|--------------------------------------------------------------------------
*/

define('DOWNLOAD_FILE', 'downloads/app.apk');

/*
|--------------------------------------------------------------------------
| URL de cierre de sesión
|--------------------------------------------------------------------------
*/

define('LOGOUT_URL', 'logout.php');

