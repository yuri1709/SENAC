<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Aluno</title>
</head>
<body>
    <h2> Dados enviados!</h2>
    <?php
    //RESGATE DE DADOS
    $nome = $_POST["nome"];
    $tel = $_POST["telefone"];
    $email = $_POST["email"];
    $ende = $_POST["endereco"];
    $sex = $_POST["sexo"];
    $cursos= $_POST["vetor"];

    //!= = diferente
    //== igual
    // && = e
    // ||

    //validação na segunda camada
    if($nome!= "" && $ende != "" && $email != "" && $tel != "" && $sex != "" && $cursos != ""){
        echo"Nome:".$nome;
        echo"<br>telefone:".$tel;
        echo"<br>e-mail:".$email;
        echo"<br>endereço:".$ende;
        echo"<br>sexo:".$sex;
        
        echo"<br>Cursos: ";

        for($i = 0; $i < count($cursos); $i++){
            echo "<br>$cursos[$i]";
        }
        //definindo o local
       
        


    }else{
        echo"<br>Preencha os campos corretamente".$msg;
    }   

    date_default_timezone_set("America/Sao_Paulo");
    $arquivo = fopen("dados.txt","a+"); //a+ = se o arquivo nao existir, ele cria
    //gravar
    fwrite($arquivo, "Dados do aluno - Cadastro realizado em : ".date("d/m/y")." as " . date("H:i:s"));
    fwrite($arquivo, "\nNome :".$nome);
    fwrite($arquivo, "\nendereço :" .$ende);
    fwrite($arquivo, "\nEmail :" .$email);
    fwrite($arquivo, "\ntelefone :" .$tel);
    fwrite($arquivo, "\nsexo :" .$sex);
    
     
    for($i = 0; $i < count($cursos); $i++){
        fwrite($arquivo, "\nCurso : ".$cursos[$i]);
    }
    
    fwrite($arquivo, "\n------------------------------------------\n\n");
    ?>
    </br>
    <a href="cadastroaluno.php" >Voltar</a>
</body>
</html>