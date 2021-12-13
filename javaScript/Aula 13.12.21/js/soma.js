//retorno do formulário html obrigatorio o name do form
function calc(){ 
    var nu1,nu2,so;
    nu1 = calculo.n1.value; //Assim que recebe o variavel do formulario html 
    nu2 = calculo.n2.value; //a palavra calculo se refere ao nome do fomulario html
    nu1 = parseInt(nu1);
    nu2 = parseInt(nu2);
    so = nu1+nu2;
    calculo.res.value = so; //recebe so
}