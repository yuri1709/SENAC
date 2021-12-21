class ContaCorrente {
   Vdeposito;
   
    constructor(){
       
        this.encapSaldo =0;
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
            this.trasnferir(transfere) ;
        }else {
            alert("Operaçao não realizada!");
        }
       
    }
    //Somente para informar o valor do saldo.
    get encapSaldo(){
        return this._saldo;
    }

    set encapSaldo(valor){
        this._saldo = parseInt(valor);
    }
    //Parei aqui,favor continuar
    
    depositar(deposito){
        this._saldo += parseFloat(deposito); //Corrigido o erro do deposito.
     }
   
    
    sacar(saque){
        if (this._saldo > 0) {
            this._saldo -= saque;
            return this._saldo;
        }else {
            alert("Saldo Insuficiente");
        }
        //this._saldo = this.saldo - this.saque;
    }

    trasnferir(transfere){
        if (this._saldo > 0) { 
            this._saldo -= transfere;
            return this._saldo;
        }else{
            alert("Saldo Insuficiente");
        }
    }
 
}
