class ContaCorrente {
   Vdeposito;
   Vtransferido;
   saldoAntigo;
   
    constructor(){
        //Setando o valor inicial do saldo.
        this._saldo = 2000;
        this.agencia = prompt("Número agencia");
        this.operacao = prompt("Sacar, Depositar ou Transferir: ");
        
        if(this.operacao == 'sacar'){
            let saque = prompt("Informe o valor do saque: ");
            this.sacar(saque);
        }else if(this.operacao == 'depositar'){
            let deposito = prompt("Informe o valor do deposito: ");
            this.depositar(deposito);
            this.Vdeposito = deposito;
        }else if (this.operacao == 'transferir'){
            let transfere = prompt("Informe o valor de trânsferencia: ")
            this.trasnferir(transfere);
            this.Vtransferido = transfere;
        }else {
            alert("Operaçao não realizada!");
        }
        //fazendo a composição de class
        this._cliente;
    }
    //Associação de classe da ContaCorrente com o Cliente
    get ContaCliente(){
        return this._cliente;
    }
    set ContaCliente(valor){
        this._cliente = valor;
    }
    //Somente para informar o valor do saldo.
    get encapSaldo(){
        return this._saldo;
    }
    
    depositar(deposito){
        this._saldo += parseFloat(deposito); //Corrigido o erro do deposito.
        this.saldoAntigo = this._saldo - parseFloat(deposito);
    }
    sacar(saque){
        if (this._saldo > 0) {
            this._saldo -= saque;
            this.saldoAntigo = this._saldo + saque;
            return this._saldo;
        }else {
            alert("Saldo Insuficiente");
        }  
    }
    trasnferir(transfere){
        if (this._saldo > 0) { 
            this._saldo -= transfere;
            this.saldoAntigo = this._saldo + transfere;
            return this._saldo;
        }else{
            alert("Saldo Insuficiente");
        }
    }
}
