function validar(){
    if((document.login.usuario.value == "Admin")&&(document.login.senha.value == "123")){ 
       return true ;
    }else {
        window.stop()
        return false;
    }
 }
 console.log(validar())