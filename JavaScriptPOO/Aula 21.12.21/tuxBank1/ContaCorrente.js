class ContaCorrente{   
    constructor(){
        this.agencia = prompt("Infome a Agencia:");
        this.numeroConta = prompt("N da conta:");
        this.saldo;
        //#1-fazendo a composição de classe
        this._cliente;//o cliente tem que ser privado
    }
    //#1retornar o cliente
    get ContaCliente(){
        return this._cliente;
    }
    //#1
    set ContaCliente(valor){
        this._cliente = valor;//passando o valor para o cliente
    }

    //
    //depositar(){}
   // transferir(){}
}