<?php

session_start();
if(emty($_SESSION['CSRF'])){
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

