<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Consulta</title>
</head>
<body>
    <div class="container">
        <h3 class="text-center bg-primary">Lista clientes</h3>
    <h6 class="py-3">
    <?php
         // 1- abrir conexao com o banco 
         $con = mysqli_connect("localhost","root","","aula4"); //respon. pela conexao com o banco

         //2- montar a intrucao de buscar os registros no banco
         $sql = "select * from cliente";

         //3 executar a intrução no banco de dados
         $result = mysqli_query($con,$sql); // varia de info de acordo com o banco de dados
         $totalregistro = mysqli_num_rows($result);//conta a quantidade de linhas que tem o resultado

         if($totalregistro > 0){
             echo"Foram encontrados : ".$totalregistro." registros da base de dados !";
             echo"<table width='800px' class='table table-bordered'>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Idade</th>
                        <th>Estado Civil</th>
                    </tr>";
            while($row = mysqli_fetch_array($result)){
                echo"<tr>";
                echo"<td>".$row["nome"]."</td>";
                echo"<td>".$row["email"]."</td>";
                echo"<td>".$row["idade"]."</td>";
                echo"<td>".$row["estado"]."</td>";
                echo"</tr>";
            }
            echo "</table>";
         }else{
             echo"Nenhum cliente cadastro!";
         }
         mysqli_close($con);
    ?>
    </h6>
   
    </div>
</body>
</html>