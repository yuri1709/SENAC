//Com parametro
class Calculadora{
    valor1; //qual é o significado do valor1 e do valor2 agr ?
    valor2;

    //Metodo de soma
    soma(numUm, numDois){
        let resultado = numUm + numDois ;
        return resultado;
    }
    subtrair(numUm, numDois){
        let resultado = numUm - numDois;
        return resultado;
    }
    multiplicar(numUm, numDois){
        let resultado = numUm * numDois;
        return resultado;
    }
    divisao(numUm, numDois){
        let resultado = numUm / numDois;
        return resultado;
    }

}

const cGabarito = new Calculadora();


for(i=0;i<=5;i++){ 
    console.log(cGabarito.soma(i,1));
}

/*
console.log(cGabarito.subtrair(30,10));
console.log(cGabarito.multiplicar(10,5));
console.log(cGabarito.divisao(30,2));*/