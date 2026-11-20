<?php

session_set_cookie_params([
    "path" => "/",
    'secure' => requestHTTPS(),
    'samesite' => 'Lax',
    'httponly' => true
]);

session_start();

if(empty($_SESSION['CSRF'])){
    $_SESSION['CSRF']= bin2hex(random_bytes(32));
}
function sanitary ($sanitary) {
    return htmlspecialchars($sanitary, ENT_QUOTES, 'UTF-8');
}

function requestHTTPS () {
    return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off';
}

function isAutenticated() {
    if(!isLoggedIn()){
        header("Location: index.php");
        exit;
    }
    return true;
}

function validateCSRFToken(string $token): bool {
    return isset($_SESSION['CSRF']) && hash_equals($_SESSION['CSRF'], $token);
}