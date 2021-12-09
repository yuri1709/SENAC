/* Receba 4 notas de um aluno e calcule a média, 
se a média for maior que 5 exiba a mensagem de aluno aprovado, 
caso contrario exiba c msg de aluno reprovado*/ 
class Aluno {
    nota1;
    nota2;
    nota3;
    nota4;

    media(){
        return (this.nota1 + this.nota2 + this.nota3 + this.nota4)/4;
    } 
}
const mediaFinal = new Aluno();
//Entrada dos valores das notas
mediaFinal.nota1=10;
mediaFinal.nota2=0;
mediaFinal.nota3=0;
mediaFinal.nota4=5;

//Condição de aprovação
mediaFinal.media() >=5.0 ? console.log("Parabéns!Aprovado"):console.log("Você foi reprovado!"); 

//Saída
console.log("Média Final do aluno ="+mediaFinal.media().toFixed(2));

