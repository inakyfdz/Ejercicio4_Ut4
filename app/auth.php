<?php

function getUserInfo(): array{
    return require __DIR__. "/../data/user.php";
}

function getInfoByEmail(string $email){
    $usserList = getUserInfo();
    foreach ($usserList as $user){
        if($email === $user['email']){
            return $user;
        }
    }
    return null;
}

function login(string $email, string $password){
    $user = getInfoByEmail($email);
    if(!password_verify($password, $user['password']) || $user === null){
       http_response_code(401);
       echo "<p> Error de autentificacion </p>";
    }else{
        session_regenerate_id();
        $_SESSION["user"] = [
            "email" => $user['email'],
            "name" => $user['name'],
            "role" => $user['role'],
            'id' => $user['id']
        ];
        header("location: /dashboard");
        exit;
    }
}

function logOut(){
    setcookie(session_name(),"", time() - 3600);
    unset($_COOKIE["user"]);
    session_destroy();
    header("location: /index.php");
    exit;
}
function isLoggedIn(){
    return isset($_SESSION["user"]) && is_array($_SESSION["user"]);
}
function currentUser () :?array {
    if(!isLoggedIn()) {
        return null;
    }
    return $_SESSION['user'];
}
function currentUserRole() :?string {
    $userAsig = currentUser();
    if($userAsig == null) {
        return null;
    }
    return $userAsig['role'];
}