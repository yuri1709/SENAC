algoritmo "semnome"
// Função :
// Autor :  Yuri Conder
// Data : 25/08/2021
// Seção de Declarações 
var
   a,b,c,j:inteiro
   lado:vetor[0..2] de inteiro
   letra:vetor[0..4] de caractere
inicio
   letra[0] <- "a"
   letra[1] <- "b"
   letra[2] <- "c"
   //Entrada de dados
   EscrevaL ("CLASSIFICADOR E VALIDADO DE TRIÃNGULOS")
   EscrevaL ("--------------------------------------")
   Para j de 0 ate 2 faca
    Escreva ("Insira o valor do lado ",letra[j]," do triângulo:")
    Leia (lado[j])
    Escolha j
         Caso 0
            a <- lado[j]
         Caso 1
            b <- lado[j]
         Caso 2
            c <- lado [j]
    FimEscolha
   FimPara
   //Processo e saida
    EscrevaL ("")
    //propriedade matemática
    Se (a + b < c) ou (a + c < b) ou (b + c < a) entao
      Escreva ("Não temos um triangulo ")
      Senao
         Se (a=b)e(a=c)e(b=c) entao
            Escreva ("Equilátero: três lados iguais")
         fimse
      
         Se (a=b) ou (a=c) ou (b=c) entao
            Escreva ("Isósceles: dois lados iguais ")
         Senao
            Escreva ("Escaleno")
         FimSe
    FimSe
fimalgoritmo
