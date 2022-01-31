<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> Dados vindo pelo Form 2</h2>
    <?php
    //RESGATE DE DADOS
    $nome = $_POST["nome"];
    $sex = $_POST["sexo"];
    $ende = $_POST["teste"];
    $tel = $_POST["telefone"];

    echo"Nome:".$nome;
    echo"<br>Sexo:".$sex;
    echo"<br>telefone:".$tel;
    echo"<br>endereco:".$ende;
    ?>
</body>
</html>