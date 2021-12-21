//fazendo a associação
const newClient = new Cliente();

const newConta = new ContaCorrente();
//Isso é composição de classe!
newConta.ContaCliente = newClient; //é o metodo set do ContaCorrente

console.log("newConta:",newConta);

document.write(newConta.ContaCliente.nome + "</br>");//
document.write(newConta.agencia + "</br>");
document.write("RG",newConta.ContaCliente.rg+ "</br>");

//document.write("Saldo", newConta.ContaSaldo);