function validar(){
    if((document.login.usuario.value == "Admin")&&(document.login.senha.value == "123")){ 
       return true ;
    }else {
       document.login.senha.focus();
        return false;
    }
 }
 console.log(validar())