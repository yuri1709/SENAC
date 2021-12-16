//So deixar a class aqui
class Calculadora{
  
    _resultado; 
    
    constructor(){//Constructor é vida,por exemplo se eu pegar dados de um formulario coloco aqui.
        this.valor1 = prompt("Informe o valor 1:");
        this.valor1 = parseFloat(this.valor1);
        this.valor2 = prompt("Informe o valor 2:");
        this.valor2 = parseFloat(this.valor2);
    }


     get encapResult(){
        return this._resultado;
    }
    set encapResult(valor){
        this._resultado = valor;
    }


    soma(){
        let resultado = this.valor1 + this.valor2 ;
       
        return  resultado;
        
       
    }
    subtrair(){
        let resultado = this.valor1 - this.valor2 ; 
        return resultado;
    }
    multiplicar(){
        let resultado = this.valor1 * this.valor2 ; 
        return resultado;
    }
    divisao(){
        let resultado = this.valor1 / this.valor2 ; 
        return resultado;
    }


//----------------------------------------------------------------
/*
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
*/

}

