function validarFormulario(){
    //resgatar os dados do formulario
    var nome = document.getElementById("nome");    
    var idade = document.getElementById("idade");
    var email = document.getElementById("email");
    var msg ="";
    var validar = true;

    // as regras de validação dos cmpos (REGEX)
    var regranome =/^[a-zA-Z á-ú]{3,30}$/;
    var regraIdade =/^[0-9]{1,3}$/;
    var regraEmail = /^[a-z0-9_.-]+@[a-z0-9_.-]+\.[a-z]{2,4}$/;
    if(!nome.value.match(regranome)){
        validar = false;
        msg = "Preencha o campo corretamente<br>";
        nome.style.border = '1px solid #FF0000';
    }
    if(!idade.value.match(regraIdade)){ //! se o valor da idade for diferente da regra idade,o validar retornará falso
        validar = false;
        msg += "Preencha o campo Idade corretamente<br>"; /// o msg=+ ele vai concatenar as mensagens de erro.
        idade.style.border = '1px solid #FF0000'; //Isso aqui deixara o campo do input na cor vermelha
    } 

    if(!email.value.match(regraEmail)){
        validar = false;
        msg += "Preencha o E-mail Corretamente <br>";
        email.style.border= '1px solid #FF0000';
    }

    if(validar == false){
        document.getElementById("resposta").innerHTML = msg; //esse aqui irá mostrar a mensagem se for  falso, o msg vai concatenando as mensagens de erro por causa do msg=+
        return validar;
    }
    if(validar == true){
       return validar;
    }
}

