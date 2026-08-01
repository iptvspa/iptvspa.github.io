/*
==============================================
IPTV-SPA 2026
JavaScript
==============================================
*/

"use strict";

/*====================================
  Mostrar / Ocultar contraseña
====================================*/

function mostrarPassword() {

    const input = document.getElementById("password");

    if (!input) return;

    if (input.type === "password") {

        input.type = "text";

    } else {

        input.type = "password";

    }

}

/*====================================
  Animación botones
====================================*/

document.querySelectorAll(".login-btn").forEach(btn => {

    btn.addEventListener("mouseenter", () => {

        btn.style.transform = "scale(1.04)";

    });

    btn.addEventListener("mouseleave", () => {

        btn.style.transform = "scale(1)";

    });

});

/*====================================
  Animación del logo
====================================*/

const logo = document.querySelector(".logo");

if (logo) {

    let angulo = 0;

    setInterval(() => {

        angulo += 0.4;

        logo.style.transform =
            "translateY(" +
            Math.sin(angulo * Math.PI / 180) * 8 +
            "px)";

    }, 25);

}

/*====================================
  Fade In
====================================*/

window.addEventListener("load", () => {

    document.body.style.opacity = "1";

});

