<?php
echo"<h2>#Variáveis</h2>";
// var_dump traz o tipo e o conteudo da variável.
$x = 10.5;
var_dump($x); //bom pra utilizar em imagens pra saber as informações se a img é jpg,png,... para salvar no banco de dados.
echo"<br>";
$y = "Hello World!";
var_dump($y);
echo"<hr>";


echo"<h2>#Funções para tratar variáveis </h2>";
$a = null ; //Empty retonar TRUE se uma var estiver vazia.
// se (condição;verdadeiro)
$b = "teste";
echo empty($a);//verificar se a var está vazia.Se estiver, retorna 1 senão retorna nada.
echo empty($b);
echo"<br>";echo"<br>";
//gettype traz o tipo da variável.
$c= 80;
echo gettype($c);
echo"<hr>";


echo"<h2>#Conversões de tipo </h2>";
$x = (int)10.5;
var_dump($x);
echo"<hr>";


echo"<h2>#Cálculo</h2>";
$v1 = 20;
$v2 = 20;
echo"Soma:".$soma = $v1 + $v2;
echo"<br>Subtração:".$sub = $v1 - $v2;
echo"<br>Multiplicação:".$mult = $v1 * $v2;
echo"<br>Divisão:".$div = $v1 / $v2;
echo"<hr>";


echo"<h2>#Incremeto de variável</h2>";
$i = 10;
//$i = $i+1;  O que é usado é o incremento
$i++;
echo "i = ".$i;
$i = 10; // forcando o i a valer 10
$i--;
echo "<br>i = ".$i;
echo"<hr>";


echo"<h2>#Funções Matemáticas</h2>";
echo "Seno:" .sin(90)."<br/>";
echo "Cosseno:".cos(90)."<br/>";

//Eu posso usar uma função dentro de uma função
echo"<br>Usando a função de cálculo do seno dentro de uma função de arredondamento</br>";
echo"Arredondando o seno de 90 = ".ceil(sin(90));
echo"<hr>";


echo"<h2>Programas prontos para utilizar</h2>";
//isso geralmente é utilizado na recuperação de senhas.
echo"<br>Número aleatório de 0 até 999";
echo"<br>resultado = ".rand(0,999);
echo"<br>";

echo"<br>Potência de um número 10^2 =";
echo pow(10,2);

echo"<br>Raiz quadrada de 25 =";
echo sqrt(25);

echo"<br>Retorna o valor de PI =";
echo pi();
echo"<hr>";


echo"<h2>Lidando com strings</h2>";

$rua = "siqueira campos";
$numero = 229;
$complemento = "apartamento 1005";
$bairro = "copacabana";

$endereco= $rua.$numero.$complemento.$bairro;
echo "<br>Endereço :".$endereco;

//Substituindo palavras não permitidas.
$a = str_replace('caraca','......','caraca esse carro é muito feio');
echo"<br> :".$a; //repare que o caraca será substituido por '......'

//BUGADO
//Deixando as palavras em maiúsculo: ERRO
// $a = stroupper('caraca esse carro é muito feio!');
// echo"<br>".$a;
//BUGADO


echo"<h4>Separando stings</h4>";
//Separando a frase
$grupo = explode (',','o carnaval, ainda não aconteceu, que pena');
echo $grupo[0]."<br>";
echo $grupo[1]."<br>";
echo $grupo[2]."<br>";
echo "<br><br>";

//Quebrando a data Método 1
$grupo = explode ('/','04/02/2022');
echo $grupo[0]."<br>";
echo $grupo[1]."<br>";
echo $grupo[2]."<br>";
//Passando a data para o banco de dados
$data = $grupo[2]."-".$grupo[1]."-".$grupo[0];
echo $data;
echo "<br>";echo "<br>";

//Quebrando a data Método 2
$data2[0] = '04';
$data2[1] = '03';
$data2[2] = '2022';
$junto = implode ('-',$data2);
//Passando a data para o banco de dados
echo " DATA JUNTA COM O - ".$junto;
?>
