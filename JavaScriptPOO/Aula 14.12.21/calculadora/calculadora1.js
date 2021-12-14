//So deixar a class aqui
class Calculadora{
  
    _resultado; 
    
     get encapResult(){
        return this._resultado;
    }
    set encapResult(valor){
        this._resultado = valor;
    }

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

