class Contador{
    valor;
    contar(){ //conta de 0 até o valor.
        for(let i=0; i<= this.valor; i++){

            console.log(i);
        }
    } // Método 
}
//Criando uma istância
const queroContar = new Contador();


queroContar.valor = 25;

console.log(queroContar.contar());