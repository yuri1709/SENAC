<?php
include_once 'topo.php';


// retirar a decodificação
// base64_decode
$id = $_GET["id"];

$sql = "delete from produto where idproduto =".$id;

include_once 'conexao.php';

if(mysqli_query($con,$sql)){
    $msg = "Produto excluido com Sucesso!";
}else{
    $msg = "Erro ao Excluir";
}
mysqli_close($con);
echo "<script>alert('".$msg."');
location.href= 'index.php';
</script>";
include_once 'rodape.php';


?>