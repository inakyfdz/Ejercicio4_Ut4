<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=sanitary($titulo) ?></title>
</head>
<body>
<h1> <?= sanitary($cabecera1) ?></h1>
<header>
    <a href="/index.php"><button>Index</button></a> <a href="/login.php"><button>Login</button></a>
    <?php if(isLoggedIn()) {
        echo "<a href='/dashboard.php'><button>Dasboard</button></a>";
        echo "<a href='/logOut.php'><button>logOut</button></a>";
        if(currentUserRole() === "admin"){
            echo "<a href='/admin.php'><button>Admin</button></a>";}}
    ?>
</header>