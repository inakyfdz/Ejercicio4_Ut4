<?php
require_once __DIR__ . "/../app/bootstrap.php";
$sitio = "indexView";
$datos = [
    'titulo' => $sitio,
    'cabecera1' => 'Bienvenido',
    'pie1' => 'Esperemos que encuentre todo lo necesario'
];
renderTool($sitio, $datos);
