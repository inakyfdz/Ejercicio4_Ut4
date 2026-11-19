<?php
require_once __DIR__ . "/../app/bootstrap.php";
    $sitio = "loggin";
    $datos = [
        'titulo' => $sitio,
        'cabecera1' => 'Te encuentras en el loggin',
        'pie1' => 'Entra y observa'
    ];
    renderTool($sitio, $datos);
