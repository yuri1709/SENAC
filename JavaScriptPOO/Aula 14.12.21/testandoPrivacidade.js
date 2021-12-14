class Pessoa{
    nome;
    _sobrenome;

    nomear(name){
        let nome = name + " Jesus"; 
        return nome;
    }

}

const p1 = new Pessoa();
//Não posso alterar o _sobrenome aqui fora da classe(da pra alterar,mas não pode.).
p1.nome="fulano";


console.log(p1.nome);
console.log(p1.nomear("Ciclano"));
console.log(p1.nome);