<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<h1 class="bg-danger">hello world</h1>

<form action="receberCadastro-aluno-interesse.php" method="post">
    <h6>Nome:</h6>
    <input type="text" name="nomeAluno">
    <h6>Endereço:</h6>
    <input type="text" name="endeAluno">
    <h6>Sexo:</h6>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Masculino">
        <label class="form-check-label" for="inlineRadio1">Masculino</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Femenino">
        <label class="form-check-label" for="inlineRadio2">Femenino</label>
    </div>
    <h6>Curso</h6>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="meu" id="inlineCheckbox1" value="PHP">
        <label class="form-check-label" for="inlineCheckbox1">PHP</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="meu" id="inlineCheckbox2" value="MYSQL">
        <label class="form-check-label" for="inlineCheckbox2">MYSQL</label>
    </div>
    <input type="submit" value="enviar">
    
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

