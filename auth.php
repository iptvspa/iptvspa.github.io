<?php

require_once 'config.php';

/**
 * Comprueba si el usuario ha iniciado sesión.
 */
function isLoggedIn(): bool
{
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}

/**
 * Protege una página privada.
 */
function requireLogin(): void
{
    if (!isLoggedIn()) {
        header('Location: index.php');
        exit;
    }
}

/**
 * Intenta iniciar sesión.
 */
function login(string $username, string $password): bool
{
    if (
        $username === ADMIN_USER &&
        password_verify($password, PASSWORD_HASH)
    ) {
        session_regenerate_id(true);

        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = ADMIN_USER;
        $_SESSION['login_time'] = time();

        return true;
    }

    return false;
}

/**
 * Cierra la sesión.
 */
function logout(): void
{
    $_SESSION = [];

    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();

        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params['path'],
            $params['domain'],
            $params['secure'],
            $params['httponly']
        );
    }

    session_destroy();

    header('Location: index.php');
    exit;
}

