<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Recebe cadastro do aluno</h1>
    <?php
    //strlen($nomeVar)
        $nomeAluno = $_POST["nome"];
        $endeAluno = $_POST["endereco"];
        $emailAluno = $_POST["email"];
        $telAluno = $_POST["telefone"];
        $msgAluno = $_POST["mensagem"];

        echo"".strlen($nomeAluno);

        if(strlen($nomeAluno)  > 0 && strlen($endeAluno) > 0 && strlen($emailAluno) > 0 && strlen($telAluno) > 0 && strlen($msgAluno) > 0){
            echo"Nome: ".$nomeAluno;
            echo"<br>Endereço: ".$endeAluno;
            echo"<br>E-mail: ".$emailAluno;
            echo"<br>telefone: ".$telAluno;
            echo"<br>mensagem: ".$msgAluno;
            //Definindo a hora
            date_default_timezone_set("America/Sao_Paulo");
            $arquivo = fopen("dados.txt","a+");
            //gravar
            fwrite($arquivo, "Dados do aluno - Cadastro realizado em:".date("d/m/Y")." as ".date("H:i:s"));
            fwrite($arquivo, "\nNome: ".$nomeAluno);
            fwrite($arquivo, "\nEndereço: ".$endeAluno);
            fwrite($arquivo, "\nemail: ".$emailAluno);
            fwrite($arquivo, "\ntelefone: ".$telAluno);
            fwrite($arquivo, "\nmensagem: ".$msgAluno);
            fwrite($arquivo, "\n----------------------\n");
            //fecha o arquivo de texto
            fclose($arquivo);
            
        }else{
            echo"Preencha os campos corretamente";
        }

        $arquivo = "
        <style type='text/css'>
        body{
            margin:0px;
            font-family:
        }
        ";
    ?>
</body>
</html>