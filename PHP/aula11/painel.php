<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Painel do Sistema</h3>
    <hr>
    <?php
        echo"Seja Bem Vindo, ".$_SESSION["nome"];
        echo "<h4>MENU</h4>";

        if($_SESSION["perfil"] == "adm"){
            include_once 'menu_admin.php';
        } else{
            include_once 'menu_user.php';
        }
    ?>
</body>
</html>