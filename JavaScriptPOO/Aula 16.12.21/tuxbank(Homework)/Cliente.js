class Cliente {
   constructor(){
        this.titular = prompt("Informe o seu nome");
        this._cpf = prompt("Informe o cpf:");
    }
    get encapCPF(){
        return this._cpf;
    }
}