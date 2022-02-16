<?php include_once 'topo.php';?>
<?php
    //registrando dados do formulario
    $nome = $_POST['nome'];
    $estoque = $_POST['estoque'];
    $valor = $_POST['valor'];
    $categoria = $_POST['categoria'];

    //validação
    if($nome != "" && $estoque != "" && $valor != "" && $categoria != ""){
        //1-Conexão com o banco
        include_once  'conexao.php';
        
        //2-montar instrução
        $sql = "insert into produtos values(null,'".$nome."','".$estoque."','".$valor."','".$categoria."')";
        //3-gravar
        $result = mysqli_query($con,$sql);

        if($result){
            echo"gravado com sucesso";
            mysqli_close($con); // fecha a conexão com o banco
        }else{
            echo"Erro ao gravar";
        }

    }else{
        echo"validação falsa, preencha corretamente!";
    }
?>

<?php include_once 'rodape.php'; ?>
