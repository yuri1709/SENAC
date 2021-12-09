/* Receba 4 notas de um aluno e calcule a média, 
se a média for maior que 5 exiba a mensagem de aluno aprovado, 
caso contrario exiba c msg de aluno reprovado*/ 
class CalculoMedia {
    nota=[]; 

    media(){
        let somaNota = 0;
        for(let i=0;i<=3;i++){  //A quantidade de loops tem que ser igual ao tamano do vetor.
            somaNota = this.nota[i] + somaNota;
        }
        somaNota = somaNota/this.nota.length; 
        //Condição de aprovação
        somaNota >=5.0 ? console.log("Parabéns!Aprovado"):console.log("Você foi reprovado!"); 
        return somaNota.toFixed(2);   
    }
}
const alunoUm = new CalculoMedia();
//Entrada dos valores das notas
alunoUm.nota[0]=5;
alunoUm.nota[1]=5;
alunoUm.nota[2]=5;
alunoUm.nota[3]=5;

//Saída
console.log("Média Final do aluno ="+alunoUm.media());

