<?php
require_once __DIR__ . "/../app/bootstrap.php";
if(isAutenticated()){
    $sitio = "dashboard";
    $datos = [
        'titulo' => $sitio,
        'cabecera1' => 'Te encuentras en el Dashboard',
        'pie1' => 'Esperemos que encuentre todo lo necesario'
    ];
    renderTool($sitio, $datos);
}