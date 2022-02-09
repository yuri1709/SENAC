<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> Dados vindo pelo Form</h2>
    <?php
    //RESGATE DE DADOS
    $nome = $_GET["nome"];
    $tel = $_GET["telefone"];
    $email = $_GET["email"];

    echo"Nome:".$nome;
    echo"<br>telefone:".$tel;
    echo"<br>e-mail:".$email;
    ?>
</body>
</html>