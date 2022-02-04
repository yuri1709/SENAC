<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Consulta-Cliente</title>
</head>
<body>
    <?php
        echo"<h1>Consulta do cliente</h1>"
    ?>
<div class="container">
   <form action="recebeConsultaCliente.php" method="get">
  <!-- Nome input -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form6Example1">Nome</label>
        <input type="text" name="nome" class="form-control" />
      </div>
    </div>

  <!-- Endereço input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example4">Endereço</label>
    <input type="text" name="endereco" class="form-control" />
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example5">Email</label>
    <input type="email" name="email" class="form-control" />
  </div>

  <!-- Telefone input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example6">Telefone</label>
    <input type="number" name="telefone" class="form-control" />
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" name="mensagem" rows="4"></textarea>
    <label class="form-label" for="form6Example7">Additional information</label>
  </div>
    
  <!-- Submit button -->
  <input type="submit" value="Enviar"/ class="bg-primary">
</form>
</div>


    <!--BootStrap Script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
</body>
</html>