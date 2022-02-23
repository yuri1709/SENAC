<?php
    session_start(); //startando a sessão
    
    // resgate de dados da tela
    $login = $_POST["login"];
    $senha = md5($_POST["senha"]); // como o banco de dados está criptografado,temos que criptografar a entrada

    //abrindo conexão com o banco
    include_once 'conexao.php';

    //Montar a instrução para ir ao banco
        //vereficando se o login existe
    $sql = "select * from usuario where login = '".$login."' ";

    $res = mysqli_query($con,$sql); // a var result ta retornando um vetor

    if(mysqli_num_rows($res) == 1){
        $row = mysqli_fetch_array($res);
        
        $_SESSION["nome"] = $row["nome"];
        $_SESSION["perfil"] = $row["perfil"];
        $_SESSION["tempo"] = time(); // guarda o momento exato do login
        header("location:painel.php"); //redireciona para outra pagina
    } else{
        $msg = "Login/Senha Invalidos!";
        header("location:index.php?msg=".$msg);
        echo "deu ruim";
    }

?>