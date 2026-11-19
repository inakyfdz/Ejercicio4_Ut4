<?php
require_once __DIR__ . "/../app/bootstrap.php";

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $password = isset($_POST["password"]) ? $_POST["password"] : 0;
        logging($email, $password);
    }

    $sitio = "loginView";
    $datos = [
        'titulo' => $sitio,
        'cabecera1' => 'Te encuentras en el loggin',
        'pie1' => 'Entra y observa'
    ];
    renderTool($sitio, $datos);
