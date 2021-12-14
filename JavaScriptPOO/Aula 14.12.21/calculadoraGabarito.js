class Calculadora{
    valor1;
    valor2;

    //Metodo de soma
    soma(){
        let resultado = this.valor1 + this.valor2;
        return resultado;
    }
    subtrair(){
        let resultado = this.valor1 - this.valor2;
        return resultado;
    }
    multiplicar(){
        let resultado = this.valor1 * this.valor2;
        return resultado;
    }
    divisao(){
        let resultado = this.valor1 / this.valor2;
        return resultado;
    }

}

const cGabarito = new Calculadora();

cGabarito.valor1 = 5;
cGabarito.valor2 = 10;

console.log(cGabarito.soma());
console.log(cGabarito.subtrair());
console.log(cGabarito.multiplicar());
console.log(cGabarito.divisao());