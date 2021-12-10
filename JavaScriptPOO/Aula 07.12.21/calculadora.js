/*
n1 = 10;
n2 = 20;
var soma = n1 + n2;
console.log(soma);


v1= 10;
v2= 20;
var multi = v1*v2;
console.log(multi);
*/

//Uma classe pode ser considerada um molde.

class Calculadora {  
    //Atributo é uma variavel metida
    valor1;
    valor2;
    soma(){
        return this.valor1 + this.valor2; //o this chama um atributo da classe.
    }
    subtracao(){
        return this.valor1 - this.valor2;
    }
    muliplicacao(){
        return this.valor1 * this.valor2;
    }
    divisao(){
        return this.valor1 / this.valor2;
    }

}
// instanciação da classe(como tivesse ativando o meu molde.)
const calculadoraDoTux = new Calculadora(); //como é uma classe devo por parênteses.(Constante GLOBAL)
//Utilizando a classe
calculadoraDoTux.valor1 =20;
calculadoraDoTux.valor2 =10;


console.log(calculadoraDoTux.soma());
console.log(calculadoraDoTux.subtracao());
console.log(calculadoraDoTux.muliplicacao());
console.log(calculadoraDoTux.divisao());
