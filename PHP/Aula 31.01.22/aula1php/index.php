<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <h2>Bem vindo ao PHP</h2>
     <?php  
        //acima inicio do PHP
        echo "<h1> > php</h1>";
        
        
        //javasript, php, java, python comentario de linha
        
        /*
        dentro do asteristico eu posso escrever um livro
        desde que eu não saio do asteristico
        */

        //declaração de variável
        $nome = "yURI"; // tipo string
        $email = "YUR5I@HOTMAIL.com"; // string
        $email = mb_strtolower($email);
        for ($x=0; $x <=3; $x++ ){ 
            if ($x == 0) {
                $nome1 = mb_strtoupper($nome[$x]);
            }else{
                $nome2[$x] = mb_strtolower($nome[$x]);
            }     
        }
        // imprimir o contéudo de uma variável
        //(.) Serve para concatenar/Juntar
        echo "Nome: ".$nome;
        echo "<br/>Email: ".$email;
        echo "<br/>Nome concatenado ".$nome1.$nome2[1];
        //fechando o php
        ?>
    <br>
    <a href="formulario1.php">Formulario1</a> <!--não precisa -->

</body>
</html>