Algoritmo "Contador de 0 ate 100"
// Disciplina  :  [Linguagem e L�gica de Programa��o] 
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 19/11/2021
Var
   num:inteiro
   contador:inteiro


Inicio
//Entrada
   Escreva ("Insira uma n�mero entre 10 e 100: ")
   Leia (num)
//processo
   Se (num < 10 ) ou (num >100) entao
      Escreva ("Os valores s�o inv�lidos")
   Senao
      Para contador de 0 ate num faca
         EscrevaL (contador)
         contador <- contador + 1
      FimPara
   FimSe


Fimalgoritmo