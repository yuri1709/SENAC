/* João trabalha em uma empresa de contabilidade e precisa criar um pequeno programa que:
		-> Aumente o salário de um funcionário em 10% caso ele atinja a meta. 
*/ 

class AumentoSalario{
    produtividade;//produtividade de joão no trabalho
    salario;
    aumento(){
        return  (this.salario*110)/100; //Aumento salário
    }
}
const salarioFinal = new AumentoSalario();

var meta = 20;
salarioFinal.produtividade=30;

if (this.produtividade >= meta){ 
salarioFinal.salario=1000;
console.log("Parabéns João! Você atingiu a meta!");
console.log(`Seu novo salário:${salarioFinal.aumento().toLocaleString('pt-BR',{style:'currency',currency:'BRL'})}`);
}else {
    console.log("Que pena João,você não atingiu a meta.Tente outra vez!");
}