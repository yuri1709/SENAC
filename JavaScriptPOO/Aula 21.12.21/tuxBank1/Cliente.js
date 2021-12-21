class Cliente{
    constructor(){
        this.nome = prompt("Nome do Cliente: ");
        this.rg = prompt("Informe o RG ");
        this._cpf = prompt("Informe o cpf: ");
    }
    get cpf(){
        return this._cpf;
    }
}