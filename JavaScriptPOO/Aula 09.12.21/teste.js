/* Receba 4 notas de um aluno e calcule a média, 
se a média for maior que 5 exiba a mensagem de aluno aprovado, 
caso contrario exiba c msg de aluno reprovado*/ 
class CalculoMedia {
    n1;
    n2;
    n3;
    n4;
    msg;
   
   media(){
       let mediAluno = (this.n1 + this.n2 + this.n3 + this.n4 )/4;

       if(mediAluno >=5){
           this.msg ="Aluno aprovado!";
           return this.msg;        
       }else{
           return this.msg = "Aluno reprovado";
        }
    }
}

const alunoUm = new CalculoMedia();

alunoUm.n1=5;
alunoUm.n2=3;
alunoUm.n3=2;
alunoUm.n4=1;

console.log(alunoUm.media());

const alunoDois = new CalculoMedia();

alunoDois.n1=10;
alunoDois.n2=6;
alunoDois.n3=5;
alunoDois.n4=8;

console.log(alunoDois.media());
