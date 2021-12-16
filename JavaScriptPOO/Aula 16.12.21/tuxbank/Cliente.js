class Cliente {
    titular;
    _cpf;

    constructor(){
        this.titular = prompt("Informe o seu nome");
        this._cpf = prompt("Informe o cpf:")
    }

    get encapCpf(){
        return this._cpf;
    }
   /*  set encapCpf(alterarCPF){
        return this._cpf = alterarCPF;
    }
 */

}