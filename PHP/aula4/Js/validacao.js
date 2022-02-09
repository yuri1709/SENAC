function validarFormulario(){
    //resgatar os dados do formulario
    var nome = document.getElementById("nome");    
    var idade = document.getElementById("idade");
    var msg ="";
    var validar = true;

    // as regras de validação dos cmpos (REGEX)
    var regranome =/^[a-zA-Z á-ú]{3,30}$/;
    var regraIdade =/^[0-9]{1,3}$/;
    if(!nome.value.match(regranome)){
        validar = false;
        msg = "Preencha o campo corretamente<br>";
        nome.style.border = '1px solid #FF0000';
    }
    if(!idade.value.match(regraIdade)){
        validar = false;
        msg += "Preencha o campo Idade corretamente<br>";
        idade.style.border = '1px solid #FF0000';
    }

    if(validar == false){
        document.getElementById("resposta").innerHTML = msg;
        return validar;
    }
    if(validar == true){
       return validar;
    }
}
