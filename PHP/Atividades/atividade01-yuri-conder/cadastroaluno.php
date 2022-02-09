<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cadastro de Interesse no curso</title>
    <style>
        body{
            background;
        }
    </style>
</head>
<body>
    <?php
        echo"<h1>Cadastro de interesse no curso</h1>"
    ?>
<div class="container bg-light">
   <form class="form-group" action="recebealuno.php" method="POST">
  <!-- Nome input -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form6Example1">Nome</label>
        <input type="text" name="nome" class="form-control"  placeholder="digite seu nome"/>
      </div>
    </div>

  <!-- Endereço input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example4">Endereço</label>
    <input type="text" name="endereco" class="form-control" placeholder="digite seu endereço" />
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example5">Email</label>
    <input type="email" name="email" class="form-control" placeholder="digite seu e-mail"/>
  </div>

  <!-- Telefone input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example6">Telefone</label>
    <input type="number" name="telefone" class="form-control" placeholder="digite seu telefone" />
  </div>

  <!-- Message input -->
  
<div class="form-outline mb-4">
    <label class="form-label" for="form6Example7">Sexo:</label></br>
    <input type ="radio" name="sexo" value= "Masculino"> Masculino
    <input type ="radio" name="sexo" value= "Feminino"> Feminino<br/>
       
  </div>

 <div class="form-outline mb-4">
    <label class="form-label" for="form6Example8">Cursos:</label></br>
  <input type ="checkbox" name="vetor[]" value="PHP"> PHP
  <input type ="checkbox" name="vetor[]" value="Designer"> Designer
  <input type ="checkbox" name="vetor[]" value="LARAVEL"> LARAVEL
  <input type ="checkbox" name="vetor[]" value="MYSQL"> MYSQL
  <input type ="checkbox" name="vetor[]" value="ORACLE"> ORACLE
        <br/>
  </div>

  <!-- Submit button -->
  <input type="reset" value="Limpar"/ class="btn btn-danger">
  <input type="submit" value="Enviar"/ class="btn btn-primary">
</form>
</div>



 <!--BootStrap -->
 <src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></>
    <src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></>
    <src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></>
</body>    

</html>