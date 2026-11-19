<?php
declare(strict_types=1);
$password = $argv[1] ?? null;

if(!is_string($password) || $password === ""){
    fwrite(STDERR, "ERROR: Missing password\n");
    exit(1);
}
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash . PHP_EOL;
