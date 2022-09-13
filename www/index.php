<?php

if(isset($_GET['action'])){
    $action = $_GET['action'] ;
}else{
    $action = 'login';
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema Registro</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
</head>

<body>
    <?php
if ($action == 'register') {
    include  'component/registrarse.php' ;
}elseif ($action == 'login') {
    include  'component/login.php' ;
}elseif ($action == 'maxSesion') {
    include  'component/maxSesion.php' ;
}elseif ($action == 'logout') {
    include  'component/logout.php' ;
}elseif ($action == 'home') {
    include  'component/userSelection.php' ;
}
?>
</body>

</html>