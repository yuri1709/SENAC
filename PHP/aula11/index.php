<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Área Restrita</h3>
    <form action="login.php" method="post">
        Login:<br/>
        <input type="text" name="login"><br/>
        Senha:<br/>
        <input type="text" name="senha"><br/>

        <input type="submit" value="Login"/>
    </form>
    <?php
        if(isset($_GET["msg"])){
            echo $_GET["msg"];
        }
    ?>
</body>
</html>