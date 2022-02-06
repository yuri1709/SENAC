<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $nome  = $_POST['nomeAluno'];
      $ender  = $_POST['endeAluno'];
      $sexo  = $_POST['inlineRadioOptions'];
      
      if(isset($_POST['meu'])){
        echo"checkbox".$_POST['meu'];
      }
     
      //$cursos = $_POST['curso1'];  

      //saida de dados
      echo"<br>NOME: ".$nome;
      echo"<br>ENDEREÇO: ".$ender;
      echo"<br>SEXO: ".$sexo;               
     
    ?>
    
</body>
</html>