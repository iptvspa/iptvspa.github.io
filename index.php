<?php
require_once 'auth.php';

if (isLoggedIn()) {
    header("Location: dashboard.php");
    exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $usuario = trim($_POST["usuario"] ?? "");
    $password = $_POST["password"] ?? "";

    if (login($usuario, $password)) {

        header("Location: dashboard.php");
        exit;

    } else {

        $error = "Usuario o contraseña incorrectos.";

    }

}
?>
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= APP_NAME ?> - Login</title>

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="login-body">

<div class="login-container">

    <div class="login-box">

        <img src="assets/img/logo.png" class="logo" alt="Logo">

        <h1><?= APP_NAME ?></h1>

        <p>Acceso privado</p>

        <?php if ($error): ?>

            <div class="error">
                <?= htmlspecialchars($error) ?>
            </div>

        <?php endif; ?>

        <form method="post">

            <input
                type="text"
                name="usuario"
                placeholder="Usuario"
                required
                autocomplete="username">

            <input
                type="password"
                id="password"
                name="password"
                placeholder="Contraseña"
                required
                autocomplete="current-password">

            <button
                type="button"
                class="mostrar"
                onclick="mostrarPassword()">
                👁 Mostrar contraseña
            </button>

            <button type="submit" class="login-btn">
                Iniciar sesión
            </button>

        </form>

    </div>

</div>

<script src="assets/js/app.js"></script>

</body>
</html>

