//Como eu preciso utilizar o molde(classe) eu ponho aqui.
const calcTop = new Calculadora(); // Pode utilizar como um clone.

/*Não preciso mais por conta do construtor.
var n1 = prompt("Informe o primeiro valor:");//tem que converter pra inteiro
n1 = parseInt(n1);
var n2 = prompt("Informe o segundo valor:");
n2 = parseInt(n2);
*/
document.write(`Soma:${calcTop.valor1} + ${calcTop.valor2} = ${calcTop.soma()} <br>`);
document.write(`Subtração:${calcTop.valor1} - ${calcTop.valor2} = ${calcTop.subtrair()} <br>`);
document.write(`Subtração:${calcTop.valor1} * ${calcTop.valor2} = ${calcTop.multiplicar()} <br>`);
document.write(`Subtração:${calcTop.valor1} / ${calcTop.valor2} = ${calcTop.divisao()} <br>`);

//Eu consigo reduzir mais ainda esse código acima:
