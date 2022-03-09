<?php
//BUG O else do $_FILES não está funcionando
//verificando se há imagem
if($_FILES){
    
    $arquivo = $_FILES["imagem"];
    var_dump($arquivo); //mostra o conteúdo.
    $arq = explode(".",$arquivo["name"]);
    //0 image 1 jpg
    $arq = array_reverse($arq);//ele inverte as posições do array.
    //0 jpg 1 nome image
    $arq = strtolower($arq[0]); // jogando para letra minúscula.
    $extensao = $arq;
    $flag = true;
   
    
    //VALIDACAO 1
    if($extensao != "jpg" && $extensao != "png"){
        echo " Arquivo de imagem deve ser do tipo (jpg ou png)<br>";
        $flag = false;
    }
    //VALIDACAO 2
    if($arquivo["size"] > 1024 * 1024){
        echo " Arquivo deve ter o tamanho máximo de 1 Megabyte <br/>";
        $flag = false;
    }

    //nomeando a imagem(Isso aqui é importante)
    $nome_arquivo = date('YmdHis').rand(10,999).".".$extensao; // esse rand serve para não sobreescrever a imagem.
                                                                //a imagem não ficará armazenada no banco de dados.
    if($flag == true){
        $titulo = $_POST['titulo'];
        $artigo = $_POST['artigo'];
        $image = $nome_arquivo;
        $datacadastro = date('Y-m-d');
        $categoria = $_POST['categoria'];
        
        $sql = "insert into artigo values (null,'".$titulo."','".$artigo."','".$image."','".$datacadastro."','".$categoria."')";
        include_once 'conexao.php';

        if(mysqli_query($con,$sql)){
            //se eu conseguir gravar a imagem OK, vamos mover a imagem para uma pasta dentro do projeto.
            move_uploaded_file($arquivo["tmp_name"],"img/".$nome_arquivo);//ele vai 
            echo "Arquivo Gravado com Sucesso!";
        }else{
            echo "Não pode gravar com sucesso";
        }
    }
}else{
    echo "Nenhuma imagem";
    $flag = false;
}

    echo"flag=".$flag;
    




// 



?>


