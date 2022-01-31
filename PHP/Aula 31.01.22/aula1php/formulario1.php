<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <?php
        echo"<h1>Cadastro de aluno</h1>";
    ?>

    <form action="recebe1.php" method="get"> <!--O action envia o arquivo para um lugar-->
        Nome:<br>
        <input type ="text" name="nome"/> 
        <br/>
        telefone:<br>
        <input type ="text" name="telefone"/> 
        <br/>
        E-mail:<br>
        <input type ="text" name="email"/> 
        <br/>
        <br/>
        <input type="submit" value="Cadastrar"/>
    </form>

    <?php
    
    ?>
</body>
</html>