<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bem vindo ao gravar &#x1F525</h1>
    <?php
    // 1- Resgatar os dados do formulario
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $estado = $_POST['estado'];
    
    //2- Validar os dados
        // != diferente
        // = atribuição
        // == comparação 
        if($nome != "" && $email != "" && $idade != "" && $estado != ""){    
        //testar para ver se o php está pegando os dados
       // 3 -> montar a instrução para ir ao banco
       //banco incremetado automacticamente, leva o null
            $sql = "insert into cliente values(null,'".$nome."','".$email."','".$idade."','".$estado."')";
        }else{
            echo"validação falsa,preencha corretamente!";
        }
        //Preciso saber se não tem nenhum dado null
        //a terceira camada ja esta sendo validada com o not null.
    ?>
</body>
</html>