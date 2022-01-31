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
        echo"<h1>Cadastro de cliente</h1>";
    ?>

    <form action="recebe2.php" method="post"> <!--O action envia o arquivo para um lugar-->
        Nome:<br>
        <input type ="text" name="nome"/> 
        <br/>
        sexo:<br>
        <input type ="radio" name="sexo"/> 
        <br/>
        Endereço:<br>
        <input type ="text" name="teste"/> 
        <br/>
        Telefone:<br>
        <input type ="text" name="telefone"/> 
        <br/>

        <br/>
        <input type="submit" value="Cadastrar"/>
    </form>

    <?php
    
    ?>
</body>
</html>