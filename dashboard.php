<?php

require_once 'auth.php';

requireLogin();

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= APP_NAME ?></title>

<link rel="stylesheet" href="assets/css/style.css">

</head>


<body>


<header class="dashboard-header">


<img src="assets/img/logo.png" class="logo" alt="IPTV-SPA">


<h1>IPTV-SPA 2026</h1>


<p>

Bienvenido,
<strong>
<?= htmlspecialchars($_SESSION['username']) ?>
</strong>

</p>


<a href="logout.php" class="logout-btn">

🚪 Cerrar sesión

</a>


</header>



<section>


<h2>🚀 La nueva generación IPTV</h2>


<div class="dashboard-intro">


<p>

Una experiencia moderna, rápida y estable.
Disfruta de una plataforma diseñada para dispositivos compatibles,
con una interfaz futurista y sencilla.

</p>


<a class="download-btn"
href="downloads/app.apk">


⚡ DESCARGAR APP

</a>


</div>


</section>



<section>


<h2>⭐ Características</h2>


<div class="cards">


<div class="card">

<h3>⚡ RÁPIDA</h3>

<p>

Carga optimizada y navegación fluida.

</p>

</div>



<div class="card">

<h3>🛡 ESTABLE</h3>

<p>

Diseño pensado para ofrecer una experiencia fiable.

</p>

</div>



<div class="card">

<h3>📱 MULTIDISPOSITIVO</h3>

<p>

Compatible con diferentes pantallas.

</p>

</div>



<div class="card">

<h3>🔒 SEGURIDAD</h3>

<p>

Sistema protegido mediante acceso privado.

</p>

</div>


</div>


</section>

