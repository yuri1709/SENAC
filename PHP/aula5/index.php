<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--script do arquivo que irá validar-->
    <script src="js/validacao.js" type="text/javascript"></script>
</head>
<body>
<!--script bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
<div class= "container">
    <h1>Sistema de Cliente</h1>
    <form class="formgroup" action="gravar.php" method="post" onsubmit ="return validarFormulario()">
    Nome:<br>
    <input type"text" name="nome" id="nome" class="form-control"/>
    <br/> <br/>
    E-mail:<br>
    <input type"text" name="email" id="email" class="form-control"/>
    <br/> <br/>
    Idade:<br>
    <input type"text" name="idade" id="idade" class="form-control"/>
    <br/> <br/>
    Estado Civil:<br>
    <select name="estado" id="estado">
    <option value=""> SELECIONE</option>
    <option value="Solteiro"> solteiro</option>
    <option value="Casado"> casado</option>
    <option value="Viuvo"> viuvo</option>
    <option value="Divorciado"> divorciado</option>
</select> </br> </br>
<input type="submit" value="Cadastrar Cliente" class="btn btn-primary"/>
<input type="reset" value="Limpar Campos" class="btn btn-danger"/>
    </form>
    <!--imprimir as msgs de erro-->
    <div id="resposta"></div>
</div>
</body>
</html>
