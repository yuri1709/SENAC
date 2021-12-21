const Clientes = new Cliente();
const ContasC = new ContaCorrente();
ContasC.ContaCliente = Clientes; //Jogando os atributos para dentro do this._cliente

//Saída de dados
document.write("Titular da Conta :",ContasC.ContaCliente.titular+"<br>");
document.write("CPF do Titular :",ContasC.ContaCliente.encapCPF+"<br>");
document.write("Saldo :",ContasC.saldoAntigo +"<br>");
if(ContasC.Vdeposito != undefined){document.write("Valor depositado :",ContasC.Vdeposito+"<br>");}
if(ContasC.Vtransferido != undefined){document.write("Valor transferido :",ContasC.Vtransferido);}
document.write("Novo saldo :",ContasC.encapSaldo +"<br>");

