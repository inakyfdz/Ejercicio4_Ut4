<?php

function sanitary ($sanitary) {
    return htmlspecialchars($sanitary, ENT_QUOTES, 'UTF-8');
}

function requestHTTPS () {
    return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off';
}
