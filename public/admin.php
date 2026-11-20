<?php
require_once __DIR__ . "/../app/bootstrap.php";

if(isAutenticated() && currentUserRole() === "admin"){
    $sitio = "adminView";
    $datos = [
        'titulo' => $sitio,
        'cabecera1' => 'Te encuentras en el adminView',
        'pie1' => 'Esperemos que encuentre todo lo necesario'
    ];
    renderTool($sitio, $datos);
}else{
    http_response_code(403);
}